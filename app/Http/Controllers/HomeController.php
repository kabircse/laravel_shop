<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
class HomeController extends Controller
{
    public function getIndex(){
        $products = DB::table('products')->paginate(10);
        return view('shop.welcome',['products'=>$products]);
    }
    public function getShow($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('shop.show_product',['product'=>$product]);
    }

    public function notification($alert,$msg){
        Session::flash('alert',$alert);
        Session::flash('notification',$msg);
    }
    
    public function getAboutus(){
        return view('shop.about_us');
    }
    
    public function getHistory(){
        return view('shop.history');
    }
    
    public function getContact(){
        return view('shop.contacts');      
    }
    
    public function getUserdashboard(){
        return view('user.user_dashboard');      
    }
    
}
