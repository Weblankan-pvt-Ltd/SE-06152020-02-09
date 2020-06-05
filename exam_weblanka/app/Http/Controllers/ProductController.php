<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(10);
        $types = Type::all();
        if($request->has('filter_type')){
            $products = Product::where('type_id',$request->filter_type)->paginate(10);
        }
        if($request->has('filter_price') && $request->filter_price == 'low' ){
            $products = Product::orderBy('price', 'asc')->paginate(10);
        }
        if($request->has('filter_price') && $request->filter_price == 'high' ){
            $products = Product::orderBy('price', 'desc')->paginate(10);
        }

        $data['types'] = $types;
        $data['products'] = $products;
        return View('product/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            //Logic Goes Here
        }catch (\Exception $ex){
            Log::error('Error : '.$ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            //Logic Goes Here
        }catch (\Exception $ex){
            Log::error('Error : '.$ex);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            //Logic Goes Here
        }catch (\Exception $ex){
            Log::error('Error : '.$ex);
        }
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
        try{
            //Logic Goes Here
        }catch (\Exception $ex){
            Log::error('Error : '.$ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            //Logic Goes Here
        }catch (\Exception $ex){
            Log::error('Error : '.$ex);
        }
    }
}
