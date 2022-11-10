@extends('layouts.master')
@section('title','Transaction')

@section('content')
    <table class="table table-dark table-striped mt-3 mb-3">
        <thead>
        <tr>
            <th scope="col">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
        <tr>
            <td><img src="{{$d->product->Image}}" height="200px" width="200px" alt="..."></td>
            <td>{{$d->product->Name}}</td>
            <td>{{$d->product->Price}}</td>
            <td>{{$d->quantity}}</td>

        </tr>
        @endforeach
        <tr>
            <td scope="col">Total Price : {{$total}}</td>
{{--            <td></td>--}}
        </tr>
        </tbody>
    </table>
@endsection
