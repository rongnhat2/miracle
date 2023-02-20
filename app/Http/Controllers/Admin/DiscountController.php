<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product; 
use App\Repositories\Manager\DiscountRepository;
use App\Models\Discount; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DiscountController extends Controller
{
    protected $product; 
    protected $discount;

    public function __construct(Discount $discount, Product $product){
        $this->discount            = new DiscountRepository($discount); 
        $this->product             = new ProductRepository($product);
    }
    public function index(){
        return view("admin.manager.discount");
    }
    public function get_discount(){
        $data_product = $this->product->get_all();
        $data = [];
        foreach ($data_product as $key => $value) {
            $discount_value = $this->discount->find_discount_by_id($value->id);
            array_push($data, [
                "data_product"  => $value,
                "data_discount" => $discount_value == null ? 0 : $discount_value->percent,
            ]); 
        } 
        return $this->discount->send_response(201, $data, null);
    } 
    public function get(){
        $data = $this->discount->get_all();
        return $this->discount->send_response(201, $data, null);
    }
 
    public function store(Request $request){  
        $data = [ 
            "product_id"    => $request->data_product,  
            "percent"       => $request->data_percent,  
        ];
        $data_create = $this->discount->create($data); 

        return $this->discount->send_response(201, null, null);
    }
    public function delete($id){ 
        $this->discount->remove_discount($id); 
        return $this->discount->send_response(200, "Delete successful", null);
    }
}
