@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
        <form action="/edit/profile" method="post" class="row g-3 needs-validation" novalidate>
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="col-sm-14 mb-3">
                <label for="validationCustom01" class="form-label">New Username</label>
                <input type="text" class="form-control" name="username" value="{{$user->name}}">
            </div>

            <div class="col-md-14 mb-3">
                <label for="validationCustom03" class="form-label">New Email</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>

            <div class="col-7">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        </div>
    </div>
@endsection

