<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('id','DESC')->get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = \App\Models\Category::get();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('cover')->store('images','public');
        // return $request->file('cover')->storeAs('qqq','test.jpg','public');



        // 方法一
        // $product = new Product;
        // $product->title = $request-> title;
        // $product->desc = $request-> desc;
        // $product->price = $request-> price;
        // $product->sale = $request-> sale;
        // $product->started_at = $request-> started_at;
        // $product->ended_at = $request-> ended_at;
        // $product->save();

        // 方法二
        // $product = new Product;
        // $product->fill($request->all());
        // $product->save();

        // 方法三

        // Product::create($request->all());

        $ext = $request->file('cover')->getClientOriginalExtension();
        $img = Str::uuid().'.'.$ext;
        $request->file('cover')->storeAs('images',$img,'public');

        $product = new Product;
        $product->fill($request->all());
        $product->cover = $img;
        $product->save();
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = \App\Models\Category::get();

        return view('product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->fill($request->all());
        $product->save();
        return redirect()->route('admin.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        // Product::destroy($product->id);
        return redirect()->route('admin.product');
    }
    public function list(){
        $products = Product::orderBy('id','DESC')->get();
        $trashes = Product::onlyTrashed()->get();
        return view('product.list',compact('products','trashes'));
    }
    public function productCategory($category_id){
        $products = Product::where('category_id',$category_id)->get();
        $category = Category::find($category_id);
        return view('product.productCategory',compact('products','category'));
    }
}
