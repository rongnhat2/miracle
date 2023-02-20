<?php

namespace App\Http\Controllers\Customer;

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

class ProductController extends Controller
{
    protected $product; 
    protected $discount;

    public function __construct(Discount $discount, Product $product){
        $this->discount            = new DiscountRepository($discount); 
        $this->product             = new ProductRepository($product);
    }
    // Lấy ra sản phẩm giảm giá thấp nhât
    public function get_best_discount(){
        $data = $this->product->get_best_discount();
        return $this->product->send_response(201, $data, null);
    }
    // Lấy ra sản phẩm mới nhất
    public function get_new_item(){
        $data_product = $this->product->get_new_arrivals(8);
        $data = [];
        foreach ($data_product as $key => $value) {
            $discount_value = $this->discount->find_discount_by_id($value->id);
            array_push($data, [
                "data_product"  => $value,
                "data_discount" => $discount_value == null ? 0 : $discount_value->percent,
            ]); 
        }
        return $this->product->send_response(200, $data, null);
    }
    // Lấy ra 1 sản phẩm giảm 
    public function get_one($id){
        $data = $this->product->get_one($id);
        $discount_value = $this->discount->find_discount_by_id($id);
        $data_return = [
            "data_product"  => $data,
            "data_discount" => $discount_value == null ? 0 : $discount_value->percent,
        ];
        return $this->product->send_response(201, $data_return, null);
    }
    // Lấy ra sản phẩm theo danh mục
    public function get_category(){
        $data_product = $this->product->get_all();
        $data = [];
        foreach ($data_product as $key => $value) {
            $discount_value = $this->discount->find_discount_by_id($value->id);
            array_push($data, [
                "data_product"  => $value,
                "data_discount" => $discount_value == null ? 0 : $discount_value->percent,
            ]); 
        }
        return $this->product->send_response(201, $data, null);
    }

}
