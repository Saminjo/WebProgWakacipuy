@extends('layouts.master')
@section('title','View Item')

@section('content')

    <table class="table table-dark table-striped mt-3 mb-3">
        <thead>
        <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Description</th>
            <th scope="col">Item Price</th>
            <th scope="col">Item Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>
                <img src="{{$product->Image}}" class="card-img-top" width="200px" height="200px" alt="...">
            </td>
            <td>{{$product->Name}}</td>
            <td>{{$product->Description}}</td>
            <td>{{$product->Price}}</td>
            <td>{{$product->Category}}</td>
            <td>
                <form action="/update/{{$product->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>

                <form action="/delete/{{$product->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <style>
        .footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 100;
        }
    </style>
@endsection
