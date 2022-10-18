@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-sm-14 mb-2">
                    <label for="validationCustom01" class="form-label">Item Name</label>
                    <input type="text" class="form-control" name="opass">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Price</label>
                    <input type="text" class="form-control" name="npass">
                </div>

                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Description</label>
                    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                </div>


                <div class="col-md-14 mb-2">
                    <label for="validationCustom03" class="form-label">Item Category</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="se">Second</option>
                        <option value="re">Recycle</option>
                    </select>
                </div>

                <div class="col-md-14 mb-2">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-7">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

