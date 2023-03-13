<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\CustomerRepository;
use App\Models\Customer;
use App\Models\CustomerDetail;
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class AuthController extends Controller
{
    protected $customer;
    protected $customer_detail;

    public function __construct(Customer $customer, CustomerDetail $customer_detail){
        $this->customer         = new CustomerRepository($customer);
        $this->customer_detail  = new CustomerRepository($customer_detail);
    }

    public function register(Request $request){
        $visible_email = $this->customer->check_email($request->data_email);
        if ($visible_email) {
            return $this->customer->send_response('Email has available!!!', null, 500);
        }else{
            $secret_key     = $this->customer->generateSecretKey();
            $data = [
                'secret_key'        =>  $secret_key,
                'email'             =>  $request->data_email,
                'password'          =>  Hash::make($request->data_password), 
                "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
                "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ];
            $customer = $this->customer->create($data);

            // Create customer infomation
            $customer_detail = [
                'customer_id'       =>  $customer->id,
                'name'          =>  $request->data_name, 
                "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
                "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            ];
            $this->customer_detail->create($customer_detail);
            
            Cookie::queue(Cookie::forget('_token_'));
            Cookie::queue('_token_', $this->customer->createTokenClient($customer->id), 2628000);

            return $this->customer->send_response('Register Success', null, 201);
        }
    }

    // Đăng nhập
    public function login(Request $request){
        $customer_id = $this->customer->checkEmailPassword($request); 
        if ($customer_id) { 
            Cookie::queue('_token_', $this->customer->createTokenClient($customer_id), 2628000);
            return $this->customer->send_response("Login Success", "", 201); 
        }else{
            return $this->customer->send_response("Username or Password is incorrect", "", 500); 
        }
    }

    // Đăng xuất
    public function logout(Request $request){
        Cookie::queue(Cookie::forget('_token_'));
        return redirect()->route('customer.view.index');
    }

}
