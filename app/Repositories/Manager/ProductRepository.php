<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class ProductRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){
        return DB::table('product')->get(); 
    }

    public function get_one($id){
        return DB::table('product')
                    ->where("id", "=", $id)
                    ->first(); 
    } 
    public function update_trending($id){
        $sql = 'UPDATE product set trending = !trending WHERE id = '.$id;
        DB::select($sql);
    }

    public function get_best_discount(){ 
        return DB::table('discount')
                    ->select('product.*', "discount.percent", "discount.created_at as discount_created_at")
                    ->leftjoin("product", "product.id", "=", "discount.product_id")
                    ->orderByDesc('discount.percent')
                    ->first(); 
    } 

    public function get_new_arrivals($limit){ 
        return DB::table('product')
                ->select('product.*', 'category.name as category_name', 'category.name as category_name')
                ->leftjoin('category', 'product.category_id', '=', 'category.id') 
                ->orderByDesc('product.created_at')
                ->limit($limit)
                ->get(); 
    } 

}
