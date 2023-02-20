<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class DiscountRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    } 
    public function get_one($id){
        return DB::table('discount')
                    ->where("id", "=", $id)
                    ->first(); 
    } 
    public function get_all(){ 
        return DB::table('discount')
                    ->select('product.*', "discount.percent", "discount.created_at as discount_created_at")
                    ->leftjoin("product", "product.id", "=", "discount.product_id")
                    ->orderByDesc('discount.created_at')
                    ->get(); 
    } 
    public function find_discount_by_id($id){ 
        return DB::table('discount')
                ->where([["product_id", "=", $id], ["status", "=", 1]])
                ->first(); 
    } 
    public function remove_discount($id){ 
        return DB::table('discount')
                ->where('product_id', $id)
                ->delete();
    } 
}
