<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Session;
use Hash;
use DB;

class CustomerRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Lấy ra tất cả user
    public function getAll(){
        return DB::table('customer') 
                    ->select('customer_detail.username', 'customer_detail.id')
                    ->leftjoin("customer_detail", "customer.id", "=", "customer_detail.customer_id") 
                    ->get(); 
    }
    // Lấy ra 1 user
    public function getOne($id){
        return DB::table('customer') 
                    ->select('customer_detail.username', 'customer_detail.id')
                    ->leftjoin("customer_detail", "customer.id", "=", "customer_detail.customer_id") 
                    ->where([["customer.id", "=", $id]])
                    ->first(); 
    }


    public function check_email($email){
        return $this->model->where('email', '=', $email)->first() ? true : false;
    } 
    // Tìm customer với Email
    public function find_with_email($email){
        return $this->model->where('email', '=', $email)->first();
    }
    public function check_login($request){
        $user = $this->model->where('email', '=', $request->data_email)->first(); 
        if ($user) {
            return Hash::check($request->data_password, $user->password) ? $user->id : false;
        }else{
            return false;
        }
    }
    public function get_by_email($email){
        return $this->model->where('email', '=', $email)->first();
    }
    public function get_by_customer_id($id){
        return $this->model->where('customer_id', '=', $id)->first();
    }
    // # Tạo token client
    public function createTokenClient($id){
        return $id . '$' . Hash::make($id . '$' . $this->model->findOrFail($id)->secret_key);
    }
    public function get_profile($id){
        $sql = "SELECT *
                FROM customer_detail
                WHERE customer_id = ".$id;
        return DB::select($sql);
    }
    // Lấy ra secret_key
    public function get_secret($id){
         $sql = "SELECT secret_key
                    FROM customer
                    WHERE id = ".$id;
        return DB::select($sql);
    } 
    // Lấy ra số dư tài khoản nạp
    public function get_coin_one($id){
        return $this->model->where('customer_id', '=', $id)->first()->coin; 
    }
    // Lấy ra số dư tài khoản khả dụng
    public function get_coin_visible($id){
        return $this->model->where('customer_id', '=', $id)->first()->coin_visible; 
    }

    // Cập nhật số dư mặc định
    public function update_coin_defaul_customer($id, $coin){
        return $this->model
                    ->where('customer_id', '=', $id)
                    ->update(['coin' => $coin]);
    }
    // Cập nhật số dư khả dụng
    public function update_coin_availability_customer($id, $coin){
        return $this->model
                    ->where('customer_id', '=', $id)
                    ->update(['coin_visible' => $coin]);
    }

    
}
