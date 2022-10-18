@extends('footer')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')
@section('title','Home')
@section('content')
    <div class="mh-100 mx-auto d-flex justify-content-center">
        <form class="outline" method="post" action="">
            @csrf
            <h1 class="display-5 mb-4">Login</h1>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember-me" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary justify-content-center ">Login</button>
        </form>
    </div>

@stop

@extends('header')


<style>
    .outline{
        border: 2px solid black;
        padding: 25px;
        /*margin: 100px 0;*/
    }
</style>

