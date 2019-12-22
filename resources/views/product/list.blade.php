@extends('layout')
   
@section('content')
<br><br><br><br><br>
  
  <br>
  
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<br><br><a href="{{ route('products.create') }}" class="btn btn-warning mb-2">Add</a> 
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr style="color:white;">
                 <th>ID</th>
                 <th>Title</th>
                 <th>Product Code</th>
                 <th>Description</th>
                 <th>Company</th>
                 <th>Type</th>
                 <th>Price</th>
                 <th>Created at</th>
                 
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr style="color:white;">
                 <td>{{ $product->id }}</td>
                 <td>{{ $product->title }}</td>
                 <td>{{ $product->product_code }}</td>
                 <td>{{ $product->description }}</td>
                 <td>{{ $product->company }}</td>
                 <td>{{ $product->type }}</td>
                 <td>{{ $product->price }}</td>
                 <td>{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
                 <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $products->links() !!}
       </div> 
   </div>
   </div>
   <br><br>
 @endsection  