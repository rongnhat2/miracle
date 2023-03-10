<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\BranchRepository;
use App\Models\Branch; 

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class BranchController extends Controller
{
    protected $branch;

    public function __construct(Branch $branch){
        $this->branch            = new BranchRepository($branch); 
    }
    public function index(){
        return view("admin.manager.branch");
    }
    public function get(){
        $data = $this->branch->get_all();
        return $this->branch->send_response(201, $data, null);
    }
    public function get_one($id){
        $data       = $this->event->get_one($id);
        $data_en    = $this->event->get_lang($id, 1);
        $data_vi    = $this->event->get_lang($id, 2);
        $data_response = [
            "data"      => $data,
            "data_en"   => $data_en,
            "data_vi"   => $data_vi,
        ];
        return $this->event->send_response(200, $data_response, null);
    }
 
    public function store(Request $request){  
        $data_item = [ 
            "name"      => $request->data_name,  
            "address"      => $request->data_address,  
        ];
        $item_create = $this->branch->create($data_item); 

        return $this->branch->send_response(201, null, null);
    }
    public function update(Request $request){   
        $data_item = [ 
            "executive_id"  => $request->data_writer,
            "link_url"      => $request->data_link,  
        ];
        if ($request->data_image != "null") {
            $data_item["image"] = $this->event->imageInventor('image-upload', $request->data_image, 1920);
        }
        $this->event->update($data_item, $request->data_id);

        $data_en = [ 
            "title"              => $request->data_title_en,  
            "description"          => $request->data_description_en,  
            "detail"          => $request->data_detail_en,  
        ];
        $this->eventLang->update($data_en, $request->data_id_en); 

        $data_vi = [ 
            "title"              => $request->data_title_vi,  
            "description"          => $request->data_description_vi,  
            "detail"          => $request->data_detail_vi,  
        ];
        $this->eventLang->update($data_vi, $request->data_id_vi); 

        return $this->event->send_response(200, null, null);
    }

    public function delete($id){
        $this->event->delete($id); 
        $this->event->delete_lang($id); 
        return $this->event->send_response(200, "Delete successful", null);
    }
    public function update_trending(Request $request){
        $this->event->update_trending($request->id);
        return $this->event->send_response(200, null, null);
    }

}
