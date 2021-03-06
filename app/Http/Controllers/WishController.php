<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Wish_list;
use Auth;
use DB;
class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        $user_id = Auth::user()->id;
        //$products = Wish_list::find(2)->product;
        //dd($products);
        $products = DB::table('wish_lists')
            ->join('products','products.id','=','wish_lists.product_id')
            ->select('products.id','name','price','image')
            ->where('wish_lists.user_id','=',$user_id)
            ->get();
        return view('shop.wish_lists',['products'=>$products]);
        
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
        $product_id = $request->get('product_id');
        if(Auth::check()){          
            $user_id = Auth::user()->id;
            $product = Wish_list::firstOrCreate(['product_id'=>$product_id,'user_id'=>$user_id]);
            $product->save();
            if($product->wasRecentlyCreated){
                return response()->json(['status'=>'Success']);
            } else
              return response()->json(['status'=>'Already added']);
        } else {
            return response()->json(['status'=>'Login for wish list']);
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
}
