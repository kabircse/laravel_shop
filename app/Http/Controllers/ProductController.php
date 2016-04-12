<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('admin.product.productList',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.productNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validations = $this->validation($inputs);
        if(!$validations->fails()){
            $result = product::create($inputs);
            if($result){
                $this->notification('success','Successs');
                return redirect('product')->with('success','Success');
            } else{
                $this->notification('warning','Failed');
                return redirect('product')->with('success','Failed');
            }
        }
        else{
            $this->notification('warning','Validation Failed');
            return redirect()->back()->withErrors($validations)->withInput($inputs);
        }
    }

    public function validation($inputs){
        $rules = array(
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        );
        return Validator::make($inputs,$rules);
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
        $product = Product::find($id);
        return view('admin.product.productEdit',compact('product'));
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
        $inputs = $request->only('name','description','price','image');
        $validations = $this->validation($inputs);
        if(!$validations->fails()){
          $update = Product::where('id',$id)->update($inputs);
          if($update){
            $this->notification('success','Success');
            return redirect('product');
          }
        }
        $this->notification('warning','Failed');
        return redirect()->back()->withErrors($validations)->withInput($inputs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product::where('id',$id)->delete();
        if($delete){
          $this->notification('success','Success');
        } else{
          $this->notification('warning','Failed');
        }
        return redirect()->back();

    }

    public function notification($alert,$msg){
        Session::flash('alert',$alert);
        Session::flash('notification',$msg);
    }
}
