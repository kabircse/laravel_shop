<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class HomeController extends Controller
{
    public function index(){
        $products = DB::table('products')->paginate(10);
        return view('shop.welcome',['products'=>$products]);    
    }
    public function getShow($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('shop.show_product',['product'=>$product]);    
    }
}
