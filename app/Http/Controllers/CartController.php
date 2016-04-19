<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        dd('ok...');
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
     if($request->ajax()) {
       $id = $request->get('product_id');
       if($request->session()->has('product_ids')){
          $request->session()->push('product_ids',$id);
       } else {
         $request->session()->push('product_ids',array($id));
       }
       return response()->json(['status'=>'Success']);
     } else {
       echo 'Wrong request';
     }
   }
   
   public function getAddwish(Request $request)
   {
     if($request->ajax()) {
       $id = $request->get('product_id');
       
       return response()->json(['status'=>'Success']);
     } else {
       echo 'Wrong request';
     }
   }
}
