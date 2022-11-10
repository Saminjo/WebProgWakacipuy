@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="card mx-auto " style="max-width: 1200px;">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="{{$product->Image}}" class="img-fluid rounded-start" style="height: 70vh; width: auto;" alt="...">
            </div>
            <div class="col-md-8 ">
                <div class="card-body mt-5">
                    <h5 class="card-title">{{$product->Name}}</h5>
                    <hr>
                    <p class="card-text">Category:</p>
                    <p class="card-text">{{$product->Category}}</p>
                    <hr>
                    <p class="card-text">Price:</p>
                    <p class="card-text">IDR. {{$product->Price}}</p>
                    <hr>
                    <p class="card-text"><small class="text-muted">Description</small></p>
                    <p>{{$product->Description}}</p>
                    <hr>
                        @guest
                        <a href="/login"><button type="submit" class="btn btn-success stockbutton" name="submit"><p>Login</p></button></a>
                        @endguest

                        @auth()
                        <form action="/product/detail" method="post">
                                @csrf
                                <div class="d-flex justify-content-between ">
                                    <div class="buttonprice">
                                        <input type="hidden" name="id" value="{{$product->id}}">



                                        <button id="minus" type="button">-</button>
                                        <input type="text" id="stock" value="1" name="currstock" readonly style="width: 24px">
                                        <button id="plus" type="button">+</button>
                                        <button type="submit" class="btn btn-success stockbutton" name="submit"><p>Add to Cart</p></button>
                                    </div>
                                </div>
                            </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>



    <style>
        .stockbutton{
            height: 40px;
        }
    </style>

    <script>
        const plus = document.getElementById('plus');
        const minus = document.getElementById('minus');
        const stock = document.getElementById('stock').value;
        const currstock = document.getElementById('stock');

        plus.addEventListener("click",function(){
            currstock.value++;
            // if(currstock.value > stock) currstock.value = stock;
        });

        minus.addEventListener("click",function(){
            currstock.value--;
            if(currstock.value < 0) currstock.value = 0;
        })

    </script>
@endsection
