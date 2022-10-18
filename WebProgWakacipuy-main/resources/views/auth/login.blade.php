@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="background min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex box">
            <div class="overflow-hidden w-50">
                <img class="transform" height="100%" src="https://media.istockphoto.com/photos/recycling-symbol-on-grass-picture-id1325018993?b=1&k=20&m=1325018993&s=170667a&w=0&h=_r0hGFSSj1dj2ZRq17B3DCnLiA_0pOuWOlmpwZDzH-Y=" alt="">
            </div>
            <div class="bg-white w-50 p-5">
                <form class="" method="post" action="">
                    @csrf
                    <h1 class="display-5 mb-4 text-center">Login</h1>
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
                    <button type="submit" class="btn btn-primary justify-content-center w-100">Login</button>

                    <p class="text-center pt-5">Don't have an account? <button type="submit" class="btn btn-outline-success">Create New</button></p>
                </form>
            </div>
        </div>
    </div>

    <style>
        .background{
            background-color: #354152;
        }

        .box{
            box-shadow: 10px 10px 8px 10px #2d3748;
        }
        .transform{
            transform: translateX(-20%);
        }

    </style>
@endsection



