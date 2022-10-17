@extends('footer')

<style>
    .setheigh{
        min-height: 30vh;
    }

    .border{
        border-style: dotted;
    }
</style>

@extends('master')
@section('title','Home')

@section('content')
    <div class="card bg-dark text-white">
        <img src="https://c1.wallpaperflare.com/preview/173/122/573/trash-empty-recycle-recycling.jpg" class="card-img" alt="">
        <div class="card-img-overlay">
            <h1 class="card-title text-center " style="color: yellow;">RECYCON SHOP</h1>
{{--            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--            <p class="card-text">Last updated 3 mins ago</p>--}}
        </div>
    </div>

    <div class="setheigh">
        <h1 class="d-flex justify-content-center">About Us</h1>
        <h3 class="border border-dark text-center w-75 mx-auto mt-5">We Are a shop for buying recycle things and second hand thing</h3>
    </div>

@stop

@extends('header')

