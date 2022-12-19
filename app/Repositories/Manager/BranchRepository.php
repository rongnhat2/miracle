<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class BranchRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){
        return DB::table('branch')->get(); 
    }

    public function get_one($id){
        return DB::table('event')
                    ->where("id", "=", $id)
                    ->first(); 
    }
    public function get_lang($id, $lang){
        return DB::table('event_lang')
                    ->where([["event_id", "=", $id] ,["lang_id", "=", $lang]])
                    ->first(); 
    }
    public function delete_lang($id){
        return DB::table('event_lang')->where('event_id', $id)->delete();
    }

    public function update_trending($id){
        $sql = 'UPDATE event set status = !status WHERE id = '.$id;
        DB::select($sql);
    }
 
    public function get_item_all($request){
        $lang = $request->lang;
        return DB::table('event')
                    ->select("event.id", 
                            "event.executive_id", 
                            "event.image", 
                            "event.status", 
                            "event.created_at", 
                            "event_lang.lang_id", 
                            "event_lang.title", 
                            "event_lang.description", 
                            "event_lang.detail")
                    ->leftjoin("event_lang", "event_lang.event_id", "=", "event.id")
                    ->where("event_lang.lang_id", "=", $lang == "en" ? 1 : 2)
                    ->orderBy('event.created_at', 'DESC')
                    ->get(); 
    }
    public function get_item($request){
        $item = $request->item;
        $lang = $request->lang;
        return DB::table('event')
                    ->select("event.id", 
                            "event.executive_id", 
                            "event.image", 
                            "event.link_url", 
                            "event.status", 
                            "event.created_at", 
                            "event_lang.lang_id", 
                            "event_lang.title", 
                            "event_lang.description", 
                            "event_lang.detail")
                    ->leftjoin("event_lang", "event_lang.event_id", "=", "event.id")
                    ->where("event_lang.lang_id", "=", $lang == "en" ? 1 : 2)
                    ->orderBy('event.created_at', 'DESC')
                    ->get($item); 
    }
    public function get_detail($request){
        $id = $request->id;
        $lang = $request->lang;
        return DB::table('event')
                    ->select("event.id", 
                            "event.executive_id", 
                            "event.image", 
                            "event.link_url", 
                            "event.status", 
                            "event.created_at", 
                            "event_lang.lang_id", 
                            "event_lang.title", 
                            "event_lang.description", 
                            "event_lang.detail",
                            "executive.image as executive_image", 
                            "executive_lang.name as executive_name",
                            "executive_lang.position as executive_position" )
                    ->leftjoin("event_lang", "event_lang.event_id", "=", "event.id")
                    ->leftjoin("executive", "event.executive_id", "=", "executive.id")
                    ->leftjoin("executive_lang", "executive_lang.executive_id", "=", "executive.id")
                    ->where([["event_lang.lang_id", "=", $lang == "en" ? 1 : 2], ["event.id", "=", $id], ["executive_lang.lang_id", "=", $lang == "en" ? 1 : 2]])
                    ->orderBy('event.created_at', 'DESC')
                    ->first(); 
    }
}
