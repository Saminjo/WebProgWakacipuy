@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="row m-2 d-flex justify-content-around">
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
    <div class="d-flex justify-content-center mb-5 mt-5">
        {{ $products->links() }}
    </div>

@endsection
