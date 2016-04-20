<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\Models\Product;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        $product_ids = $request->session()->get('product_ids');
        $products = Product::whereIn('id',$product_ids)->select('id','name','price','image')->get();
        return view('shop.cart_items',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getStore(Request $request)
    {
      if($request->isMethod('get')) {
        $id = 6;//$request->get('product_id');
        return response()->json(['data'=>$id]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   public function getAdd(Request $request)
   {
     if($request->ajax())
      {
       $this->add_to_cart($request);
       return response()->json(['status'=>'Success']);
     } else {
       echo 'Wrong request';
     }
   }

   public function add_to_cart($request){
     $id = $request->get('product_id');
     if($request->session()->has('product_ids')){
        return $request->session()->push('product_ids',$id);
     } else {
       return $request->session()->push('product_ids',$id);
     }
   }

   public function getAddbuy(Request $request)
   {
        if($request->ajax())
         {
          $this->add_to_cart($request);
          //redirect();
        } else {
          echo 'Wrong request';
        }
    }


}
