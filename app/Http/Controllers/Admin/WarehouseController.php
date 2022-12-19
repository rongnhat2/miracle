<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\WarehouseRepository;
use App\Models\Warehouse; 
use App\Models\warehouseHistory;  

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class WarehouseController extends Controller
{
    protected $warehouse;
    protected $warehouseHistory; 

    public function __construct(Warehouse $warehouse, warehouseHistory $warehouseHistory){
        $this->warehouse            = new WarehouseRepository($warehouse); 
        $this->warehouseHistory     = new WarehouseRepository($warehouseHistory); 
    }
    public function index(){
        return view("admin.manager.warehouse");
    }
    public function get_history(){
        $data = $this->warehouseHistory->get_all_hítory();
        return $this->warehouseHistory->send_response(201, $data, null);
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
        $token = $request->cookie('_token__');
        list($user_id, $token) = explode('$', $request->cookie('_token__'), 2);
        $data_item = [ 
            "admin_id"      => $user_id,  
            "branch_id"     => $request->data_branch,  
            "product_id"    => $request->data_product,  
            "quantity"      => $request->data_quantity,  
            "prices"        => $request->data_prices,
            "history_status"=> "1",
        ];
        $item_create = $this->warehouseHistory->create($data_item); 


        $get_item = $this->warehouse->get_one($request->data_branch, $request->data_product); 

        if ($get_item == null) {
            $data_warehouse = [
                "branch_id"     => $request->data_branch,  
                "product_id"    => $request->data_product,  
                "quantity"      => $request->data_quantity,  
            ];
            $this->warehouse->create($data_warehouse); 
        }else{
            $data_warehouse = [
                "quantity"      => $request->data_quantity + $get_item->quantity,  
            ];
            $this->warehouse->update_quantity($request->data_branch, $request->data_product, $data_warehouse); 
        }
        return $this->warehouse->send_response(201, null, null);
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
}
