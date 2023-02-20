<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\CategoryRepository;
use App\Models\Category; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category){
        $this->category            = new CategoryRepository($category); 
    }
    public function index(){
        return view("admin.manager.category");
    }
    public function get(){
        $data = $this->category->get_all();
        return $this->category->send_response(201, $data, null);
    }
    public function get_one($id){
        $data       = $this->category->get_one($id); 
        return $this->category->send_response(200, $data, null);
    }
 
    public function store(Request $request){  
        
        $data_image = $this->category->imageInventor('image-category', $request->data_image, 600);
        $data_item = [ 
            "name"      => $request->data_name,  
            "slug"      => $this->category->to_slug($request->data_name),
            "icon"      => $request->data_icon,  
            "image"     => $data_image,  
        ];
        $item_create = $this->category->create($data_item); 

        return $this->category->send_response(201, null, null);
    }
    public function update(Request $request){   
        $data_item = [ 
            "name"      => $request->data_name,  
            "slug"      => $this->category->to_slug($request->data_name),
            "icon"      => $request->data_icon,  
        ];
        if ($request->data_image != "null") { $data_item["image"] = $this->category->imageInventor('image-category', $request->data_image, 1920); }
        $this->category->update($data_item, $request->data_id);

        return $this->category->send_response(200, null, null);
    }

    public function delete($id){
        $this->category->delete($id); 
        return $this->category->send_response(200, "Delete successful", null);
    }
    public function update_trending(Request $request){
        $this->category->update_trending($request->id);
        return $this->category->send_response(200, null, null);
    }

}
