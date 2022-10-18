@extends('layouts.master')
@section('title','Home')

@section('content')
    <table class="table table-dark table-striped mt-3 mb-3">
        <thead>
        <tr>
            <th scope="col">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Image</td>
            <td>barang</td>
            <td>5000</td>
            <td>4</td>
            <td>40000</td>
        </tr>
        <tr>
            <td>Image</td>
            <td>barang1</td>
            <td>6000</td>
            <td>6</td>
            <td>60000</td>
        </tr>
        <tr>

            <td>Image</td>
            <td>barang3</td>
            <td>7000</td>
            <td>7</td>
            <td>70000</td>

        </tr>
        </tbody>
    </table>
@endsection
