@extends('layouts.master')
@section('title','Update Item')

@section('content')
    <div class="container">
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
            <form action="/product/update" method="post" enctype="multipart/form-data" class="row g-3 needs-validation">
                @csrf

                <input type="hidden" name="id" value="{{$product->id}}">

                <div class="col-sm-14 mb-2">
                    <label for="validationCustom01" class="form-label">Item Name</label>
                    <input type="text" class="form-control" name="name" value="{{$product->Name}}">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Price</label>
                    <input type="text" class="form-control" name="price" value="{{$product->Price}}">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Description</label>
                    <textarea name="desc" rows="4" cols="50" >{{$product->Description}}</textarea>
                </div>


                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Category</label>
                    <select class="form-select" name="cate" aria-label="Default select example">
                        <option selected>{{$product->Category}}</option>
                        @if($product->Category == 'Second')
                            <option value="Recycle">Recycle</option>
                        @elseif($product->Category == 'Recycle')
                            <option value="Second">Second</option>
                        @endif
                    </select>
                </div>

                <div class="col-md-14 mb-2">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="file" value="{{$product->Image}}">
                </div>

                <div class="col-7">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>

                @if($errors->any())
                    @foreach($errors->all() as $err)
                        <div class="alert alert-danger" role="alert">
                            {{$err}}
                        </div>
                    @endforeach
                @endif
            </form>
        </div>
    </div>
    </div>
@endsection

