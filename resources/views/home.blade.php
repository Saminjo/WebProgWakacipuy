@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="overflow-hidden picturebox p-3 opacitypic position-relative">
        <h1 class="position-absolute top-50 start-50 fw-bold">RECYCON SHOP</h1>
        <img width="100%"src="https://c1.wallpaperflare.com/preview/173/122/573/trash-empty-recycle-recycling.jpg" alt="">
    </div>
    <div class="setheight pt-3 mb-5">
        <h1 class="text-center colortext">ABOUT US</h1>
        <h3 class="bordertext text-center w-75 mx-auto mt-5 p-5">We Are a shop for buying recycle things and second hand thing</h3>
    </div>

    <style>
        .colortext{
            color: green;
        }
        .position-absolute{
            transform: translate(-45%,-45%);
            color: yellow;
        }
        .picturebox{
            max-height: 88vh;
        }

        .opacitypic::before{
            content: '';
            width: 98%;
            height: 100%;
            background-color: black;
            position: absolute;
            opacity: 0.3;
        }
        .setheight{
            min-height: 30vh;
        }

        .bordertext{
            border: 3px dashed black;
        }
    </style>
@endsection



