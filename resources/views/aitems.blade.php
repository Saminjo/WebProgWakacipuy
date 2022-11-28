@extends('layouts.master')
@section('title','Add Item')

@section('content')
    <div class="container">
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
            <form action="/insert" method="post" enctype="multipart/form-data" class="row g-3 needs-validation">
                @csrf

                <div class="col-sm-14 mb-2">
                    <label for="validationCustom01" class="form-label">Item Name</label>
                    <input type="text" class="form-control" name="name" ">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Price</label>
                    <input type="text" class="form-control" name="price" ">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Description</label>
                    <textarea name="desc" rows="4" cols="50" ></textarea>
                </div>


                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Category</label>
                    <select class="form-select" name="cate" aria-label="Default select example">
                            <option selected></option>
                            <option value="Recycle">Recycle</option>
                            <option value="Second">Second</option>
                    </select>
                </div>

                <div class="col-md-14 mb-2">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="text" name="file" >
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

