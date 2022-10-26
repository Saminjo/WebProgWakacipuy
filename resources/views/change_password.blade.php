@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
            <form action="/change/password" method="post" class="row g-3 needs-validation" novalidate>
{{--                <div class="col-sm-14 mb-3">--}}
{{--                    <label for="validationCustom01" class="form-label">Old Password</label>--}}
{{--                    <input type="text" class="form-control" name="opass">--}}
{{--                </div>--}}
                @csrf

                <input type="hidden" name="id" value="{{$user->id}}">

                <div class="col-md-14 mb-3">
                    <label for="validationCustom03" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="npass">
                </div>

                <div class="col-md-14 mb-3">
                    <label for="validationCustom03" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cpass">
                </div>

                <div class="col-7">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>

                @if(\Illuminate\Support\Facades\Session::has('error'))
                <div class="alert alert-danger" role="alert">
                        {{\Illuminate\Support\Facades\Session::get('error')}}
                </div>
                @endif
            </form>
        </div>
    </div>
@endsection

