<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\SaveFile;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use SaveFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        if(auth()->check()){
           
            return view('admin.product',compact('products'));
        }
        
        return view('product',compact('products'));
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
    public function store(Request $request)
    {
        $photo= $this->SaveFile($request->photo,'img/products');
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$photo
        ]);
        return redirect()->route('admin.product.index')->with(['msg'=>'created']);

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
        Product::find($id)->update([
            'name'=>$request->name,
            'price'=>$request->price
        ]);
        return redirect()->route('admin.product.index')->with(['msg'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin.product.index')->with(['msg'=>'deleted']);

    }
}
