@extends('footer')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')
@section('title','Home')
@section('content')
    <div class=" w-75 mx-auto">
        <form class="outline" method="post" action="">
            @csrf
            <h1 class="display-5 mb-4">Register Form</h1>
            <div class="mb-3 ">
                <label for="FullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="email" id="FullName">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="confirmPassword">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary ">Register Now</button>
            </div>
        </form>
    </div>

@stop

@extends('header')


<style>
    .outline{
        border: 2px solid black;
        padding: 25px;
        margin: 60px 0;
    }

</style>

