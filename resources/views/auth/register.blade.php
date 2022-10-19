@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="content min-vh-100 mx-auto d-flex align-items-center justify-content-center">
        <form class="outline" method="post" action="/register">
            @csrf
            <h1 class="display-5 mb-4">Register Form</h1>
            <div class="mb-3 ">
                <label for="FullName" class="form-label">Full Name</label>
                <input type="text" class="boxing form-control" name="name" id="FullName" autocomplete="none">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="boxing form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="none">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="boxing form-control" name="password" id="exampleInputPassword1" autocomplete="none">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="boxing form-control" name="confirm-password" id="confirmPassword" autocomplete="none">
            </div>
            @if($errors->any())
                <div class="error-message text-center">
                    <h1>{{$errors->first()}}</h1>
                </div>
            @endif
            <div class="d-flex justify-content-center pt-4">
                <button type="submit" class="link btn btn-primary">Register Now</button>
            </div>
        </form>
    </div>


    <style>
        *{
            color: white;
            outline: none;
            box-sizing: border-box;
        }
        .content{
            background-color: #aaaaaa;
        }
        .outline{
            padding: 50px;
            margin: 60px 0;
            background-color: #52524f;
            border-radius: 10px;
            box-shadow: 3px 3px 3px 3px black;
        }

        .boxing{
            border: 2px solid black;
            border-radius: 50px;
            background-color: #52524f;
        }

        .link{
            background-image: linear-gradient(160deg, #8ceabb 0%, #378f7b 100%);
        }

        .error-message h1{
            color: red;
            font-size: 1rem;
        }


    </style>
@endsection



