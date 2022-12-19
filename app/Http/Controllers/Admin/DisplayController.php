<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function index(){
        return redirect()->route("admin.product.index");
    }
}
