@extends('layouts.master')
@section('title','Show Product')

@section('content')

    <div class="container-content-width">
        <div class="row d-flex justify-content-around flex-warp mt-5">
            @foreach($products as $product)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$product->Image}}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->Name}}</h5>
                        <p class="card-text">{{$product->Price}}</p>
                        <a href="/product/detail/{{$product->id}}" class="btn btn-primary">Detail Product</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-5 align-items-end">
        {{ $products->links() }}
    </div>

    <style>
        .container-content-width{
            width: 100vw;
            right: 0;
        }
        .footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 100;
        }
    </style>
@endsection
