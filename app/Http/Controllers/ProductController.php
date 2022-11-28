<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::Paginate(3);
        return view('showproduct',compact('products'));
    }

    public function detailproductpage($id){
        $product = Product::find($id);
        return view('view_detail',compact('product'));
    }

    public function detailproductget(Request $request){
        $user = Auth::user();
        $check = Cart::where([
            ['user_id','=',$user->id],
            ['product_id','=',$request->id]
        ]);
        if($check->count() > 0){
            $check->update(['quantity' => $check->first()->quantity + $request->currstock]);
        }else{
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $request->id;
            $cart->quantity = $request->currstock;
            $cart->save();
        }

        return redirect()->back();
    }

    public function viewProduct()
    {
        $products = Product::all();
        return view('view_item')->with('products',$products);
    }

    public function insertPage()
    {

        return view('aitems');
    }

    public function insertProduct(Request $req)
    {
        $rule = [
            'name' => 'required|unique:products|max:20',
            'price' => 'required|numeric|min:1000',
            'desc' => 'required|max:200',
            'cate' => 'required|required_with:Recycle,Second',
            'file' => 'required'
        ];

        $validate = Validator::make($req->all(),$rule);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        $product = new Product();

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

        $rule = [
            'name' => 'required|unique:products|max:20',
            'price' => 'required|numeric|min:1000',
            'desc' => 'required|max:200',
            'cate' => 'required|required_with:Recycle,Second',
            'file' => 'required'
        ];

        $validate = Validator::make($req->all(),$rule);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        $product = Product::find($req->id);
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
        $products->delete();
        return redirect('/view/product');
    }

    public function ViewCart()
    {
        $id = Auth::user()->id;
        $data = Cart::where('user_id',$id)->get();
//        dd($data->product);
        $total = 0;
        foreach ($data as $d){
            $total += $d->product->Price * $d->quantity;
        }
        return view('cart',compact('data','total'));
    }

    public function Cart(Request $req)
    {


        $header = new TransactionHeader();
        $header->user_id = Auth::user()->id;
        $header->quantity = 0;
        $header->save();

        $h = TransactionHeader::where('user_id',Auth::user()->id)->orderBy('user_id','desc')->first();

        $data = Cart::where('user_id',Auth::user()->id)->get();

        $detail = new TransactionDetail();
        $detail->transaction_id = $h->id;
        foreach ($data as $d){
            $detail->product_id = $d->product->id;
            $detail->quantity = $d->quantity;
        }
        $detail->save();

        Cart::whereNotNull('user_id')->delete();


        return redirect('/show/product');
    }

    public function Transaction()
    {
        $data = TransactionDetail::all();
        $total = 0;
        foreach ($data as $d){
            $total += $d->product->Price * $d->quantity;
        }

        return view('transaction',compact('data','total'));
    }
}
