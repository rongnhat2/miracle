<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    public function index(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.index', compact("customer_data"));
    }
    public function login(Request $request){ 
        $customer_data = static::generate_logined($request);
        return view('customer.login', compact("customer_data"));
    }
    public function register(Request $request){ 
        $customer_data = static::generate_logined($request);
        return view('customer.register', compact("customer_data"));
    }
    public function profile(Request $request){ 
        $customer_data = static::generate_logined($request);
        return view('customer.profile', compact("customer_data"));
    }
    public function about(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.about', compact("customer_data"));
    }
    public function category(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.category', compact("customer_data"));
    }
    public function product(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.product', compact("customer_data"));
    }
    public function news(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.news', compact("customer_data"));
    }
    public function contact(Request $request){
        $customer_data = static::generate_logined($request);
        return view('customer.contact', compact("customer_data"));
    }

    public function generate_logined($request){
        $user_login = [
            'id'        => null,
            'is_login'  => false
        ];
        if ($request->cookie('_token_')) {
            list($user_id, $token) = explode('$', $request->cookie('_token_'), 2);
            $sql_getAuth    = 'SELECT  *
                                FROM customer_detail 
                                WHERE customer_detail.customer_id = "'.$user_id.'"';
            $hasAuth    = DB::select($sql_getAuth); 
            if (count($hasAuth) != 0) {
                $user_login['id']           = $hasAuth[0]->customer_id; 
                $user_login['is_login']     = true;
            }
        }
        return $user_login;
    }
}
