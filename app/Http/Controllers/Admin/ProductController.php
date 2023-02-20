<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ProductRepository;
use App\Models\Product; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product){
        $this->product            = new ProductRepository($product); 
    }
    public function index(){
        return view("admin.manager.product");
    }
    // Lấy ra tất cả đối tượng
    public function get(){
        $data = $this->product->get_all();
        return $this->product->send_response(201, $data, null);
    }
    // Lấy ra một đối tượng
    public function get_one($id){
        $data       = $this->product->get_one($id);  
        return $this->product->send_response(200, $data, null);
    }
    // tạo mới một đối tượng
    public function store(Request $request){  
        $data_image = $this->product->imageInventor('image-product', $request->data_image, 600);
        $data_item = [ 
            "category_id"   => $request->data_category,  
            "image"         => $data_image,  
            "name"          => $request->data_name,  
            "slug"          => $this->product->to_slug($request->data_name),
            "description"   => $request->data_description,  
            "detail"        => $request->data_detail,  
            "prices"        => $request->data_prices,  
        ];
        $item_create = $this->product->create($data_item); 

        return $this->product->send_response(201, null, null);
    }
    // Cập nhật một đối tượng
    public function update(Request $request){
        $data_item = [ 
            "category_id"   => $request->data_category,
            "name"          => $request->data_name,  
            "slug"          => $this->product->to_slug($request->data_name),
            "description"   => $request->data_description,  
            "detail"        => $request->data_detail,  
            "prices"        => $request->data_prices,  
        ];
        if ($request->data_image != "null") { $data["image"] = $this->product->imageInventor('image-product', $request->data_image, 500); }
        $this->product->update($data_item, $request->data_id); 

        return $this->product->send_response(200, null, null);
    }
    // Cập nhật một đối tượng
    public function refresh_slug(){
        $data = $this->product->get_all();
        foreach ($data as $key => $value) {
            $data_item = [ 
                "slug"          => $this->product->to_slug($value->name),
            ];
            $this->product->update($data_item, $value->id);
        }
        return $this->product->send_response(200, null, null);
    }

    // Xóa một đối tượng
    public function delete($id){
        $this->product->delete($id);
        return $this->product->send_response(200, "Delete successful", null);
    }

    // cập nhật trending
    public function update_trending(Request $request){
        $this->product->update_trending($request->id);
        return $this->product->send_response(200, null, null);
    }
}
