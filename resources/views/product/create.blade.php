@extends('layout')
 
@section('content')
<br><br><br><br><br>
  
  <br>
  
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<h2 style="margin-top: 12px;" class="text-center"><br><br>Add Product</a></h2>
<br>
 
<form action="{{ route('products.store') }}" method="POST" name="add_product">
{{ csrf_field() }}
 
<div class="row">
<div class="col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <input type="text" name="id" class="form-control" placeholder="Enter ID">
            <span class="text-danger">{{ $errors->first('id') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Product Code</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code">
            <span class="text-danger">{{ $errors->first('product_code') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description"></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Company</strong>
            <textarea class="form-control" col="4" name="company" placeholder="Enter company"></textarea>
            <span class="text-danger">{{ $errors->first('company') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Type</strong>
            <textarea class="form-control" col="4" name="type" placeholder="Enter type"></textarea>
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <textarea class="form-control" col="4" name="price" placeholder="Enter price"></textarea>
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-warning">Submit</button><br><br>
    </div>
</div>
 
</form>
</div>
@endsection