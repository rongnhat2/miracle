<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    public function index(){
        return view('customer.index');
    }
    public function login(){
        return view('customer.login');
    }
    public function register(){
        return view('customer.register');
    }
    public function about(){
        return view('customer.about');
    }
    public function category(){
        return view('customer.category');
    }
    public function product(){
        return view('customer.product');
    }
    public function news(){
        return view('customer.news');
    }
    public function contact(){
        return view('customer.contact');
    }
}
