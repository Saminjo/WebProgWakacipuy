<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view('showproduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewProduct()
    {
        $products = Product::all();
        return view('view_item')->with('products',$products);
    }

    public function insertPage()
    {
//        $product = Product::find($id);
        return view('aitems');
    }

    public function insertProduct(Request $req)
    {
        $product = new Product();
//        $product = Product::where('id',$req->id)->get();
        $product->Name = $req->name;
        $product->Price = $req->price;
        $product->Description = $req->desc;
        $product->Category = $req->cate;
        $product->Image = $req->file;
        $product->save();

        return redirect('/view/product');
    }

    public function updatePage($id)
    {
        $product = Product::find($id);
        return view('uitems')->with('product',$product);
    }

    public function updateProduct(Request $req)
    {
        $product = Product::find($req->id);
//        $product = Product::where('id',$req->id)->get();
        $product->Name = $req->name;
        $product->Price = $req->price;
        $product->Description = $req->desc;
        $product->Category = $req->cate;
        $product->Image = $req->file;
        $product->save();

        return redirect('/view/product');
    }

    public function deleteProduct($id)
    {
        $products = Product::find($id);
        $product->delete();
        return redirect('/view/product');
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
    }
}
