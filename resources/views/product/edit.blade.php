@extends('layout')

@section('content')
<br><br><br><br><br>
  
  <br>
  
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<h2 style="margin-top: 12px;" class="text-center">Edit Product</a></h2>
<br>
 
<form action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
<div class="col-md-12">
        <div class="form-group">
            <strong>ID</strong>
            <input type="text" name="id" class="form-control" placeholder="Enter ID" value="{{ $product_info->id }}">
            <span class="text-danger">{{ $errors->first('id') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $product_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Product Code</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" value="{{ $product_info->product_code }}">
            <span class="text-danger">{{ $errors->first('product_code') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $product_info->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Company</strong>
            <input type="text" name="company" class="form-control" placeholder="Enter Company" value="{{ $product_info->company }}">
            <span class="text-danger">{{ $errors->first('company') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Type</strong>
            <input type="text" name="type" class="form-control" placeholder="Enter Type" value="{{ $product_info->type }}">
            <span class="text-danger">{{ $errors->first('type') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ $product_info->price}}">
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
</div>
@endsection