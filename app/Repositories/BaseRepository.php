<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Traits\ApiRequest;
use Illuminate\Database\Eloquent\Model;
use Image;
use Session;
use Hash;
use DB;

abstract class BaseRepository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function getAll()
    {
        return $this->model->all()->sortByDesc("id");
    }

    // create a new record in the database
    public function create(array $data)
    {
        try {
            DB::beginTransaction();
            $record   = $this->model->create($data);
            DB::commit();
            return $record;
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }

    // update record in the database
    public function update(array $data, $id = null)
    {
        try {
            DB::beginTransaction();
            $record     = $this->find($id)->update($data);
            DB::commit();
            return $record;
        } catch (\Exception $exception) {
            DB::rollBack();
            return false;
        }
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    // show the record with the given id
    public function findColumn($column, $id)
    {
        return $this->model->where($column, $id)->get();
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function updateOrCreate(array $data, $id)
    {
        return $this->model->updateOrCreate(['id' => $id], $data);
    }
    
    // # t???o random secret key
    public function generateSecretKey(){
        return mt_rand(1000000, 9999999);
    }

    public function send_response($message, $data, $status){
        $res = [
            'status'    => $status,
            'data'      => $data,
            'message'   => $message,
        ];
        return response()->json($res);
    }

    public function imageInventor($folder, $image, $size){
        $input['imagename'] = time() . static::to_reset($image->getClientOriginalName());
        $filePath = public_path($folder);
        $img = Image::make($image->path());
        $img->resize($size, null, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$input['imagename']);
        return $folder.'/'.$input['imagename'];
    }

    public function to_reset($string){
        $str = trim(mb_strtolower($string));
        $str =  preg_replace('/\s+/', '', $str);
        return $str;
    }
    
    public function to_slug($str){
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(???)/', ' ', $str);
        $str = preg_replace('/(-)/', ' ', $str);
        $str = preg_replace('/(")/', '', $str);
        $str = preg_replace('/(???)/', '', $str);
        $str = preg_replace('/(???)/', '', $str);
        $str = preg_replace('/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/', 'a', $str);
        $str = preg_replace('/(??|??|???|???|???|??|???|???|???|???|???)/', 'e', $str);
        $str = preg_replace('/(??|??|???|???|??)/', 'i', $str);
        $str = preg_replace('/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/', 'o', $str);
        $str = preg_replace('/(??|??|???|???|??|??|???|???|???|???|???)/', 'u', $str);
        $str = preg_replace('/(???|??|???|???|???)/', 'y', $str);
        $str = preg_replace('/(??)/', 'd', $str);
        $str = preg_replace('/(\[|\])/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}
