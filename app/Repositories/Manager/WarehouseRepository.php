<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class WarehouseRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){
        return DB::table('warehouse')->get(); 
    }

    public function get_one($branch_id, $id){
        return DB::table('warehouse')
                    ->where([["branch_id", "=", $branch_id], ["product_id", "=", $id]])
                    ->first(); 
    }
    public function update_quantity($branch_id, $id, $value){
        return DB::table('warehouse')
                    ->where([
                                ["branch_id", "=", $branch_id], 
                                ["product_id", "=", $id]
                            ])
                    ->update($value);
    }

    public function get_all_hítory(){
        return DB::table('warehouse_history')
                    ->select("warehouse_history.*", "product.name as product_name", "branch.name as branch_name")
                    ->leftjoin('product', 'product.id', '=', "warehouse_history.product_id")
                    ->leftjoin('branch', 'branch.id', '=', "warehouse_history.branch_id")
                    ->get(); 
    }

    public function get_item_all(){
        return DB::table('warehouse')
                    ->select("warehouse.*", "product.name as product_name", "product.prices as product_prices", "product.prices as product_prices")
                    ->leftjoin('product', 'product.id', '=', "warehouse.product_id")
                    ->get(); 
    }


}
