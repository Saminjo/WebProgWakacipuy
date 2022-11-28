@extends('layouts.master')
@section('title','Cart')

@section('content')
    <div class="container">
    <div class="mt-5 mb-5">
        <h1 class="ps-3 mt-4 mb-4">My Cart</h1>
        <div class="mx-3">
            <table class="table table-bordered border-primary">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item Image</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($data as $d)
                    <tr>
                        {{--                <th scope="row">1</th>--}}
                        <td><img src="{{$d->product->Image}}" height="100px" width="100px" alt="..."></td>
                        <td>{{$d->product->Name}}</td>
                        <td>IDR {{$d->product->Price}}</td>
                        <td>{{$d->quantity}}</td>
                        <td>IDR {{$d->product->Price * $d->quantity}}</td>
                        <td>
                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>

                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="Grand-total">
                <h6 class="fw-bold">Grand Total : IDR. {{$total}}</h6>
            </div>
        </div>

        <div class="Receiver mx-5 mt-5 mb-5">
            <h2>Receiver</h2>
            <form action="/cart" method="post">
                @csrf
                <div class="mb-3">
                    <label for="Receiver Name" class="form-label">Receiver Name</label>
                    <textarea class="form-control" id="Receiver Name" aria-describedby="emailHelp"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Receiver Address" class="form-label">Receiver Address</label>
                    <textarea class="form-control" id="Receiver Address" rows="4" cols="50"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        </div>
    </div>
    </div>
@endsection
