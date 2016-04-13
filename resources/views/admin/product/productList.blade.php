@extends('layouts.app',['headerTitle'=>'Product List','contentTitle'=>'Product'])

@section('main-content')
    <div class="container">
		<div class="col-md-7 col-md-offset-1">
			<h2>Product List</h2>
			<table class="table table-striped table-bordered table-hover table-condensed">
			  <thead>
				<tr>
				  <th>No</th>
				  <th>Name</th>
				  <th>Description</th>
				  <th>Price</th>
				  <th>Image</th>
				  <th>Edit</th>
				   <th>Delete</th>
				</tr>
			  </thead>
			  <tbody>
			  {{--*/ $i = 1 /*--}}
				@foreach($products as $product)
				  <tr>
				    <td>{{ $i++ }}</td>
  					<td>{{ $product->name }}</td>
  					<td>{{ $product->description }}</td>
  					<td>{{ $product->price}}</td>
  					<td>{{ $product->image}}</td>
  					<td><a clas="btn btn-xs btn-warning" href="{{ route('product.edit',$product->id) }}">Edit</a></td>
  					<td>
              <form action="{{ URL::to('product',$product->id) }}" method="post" onclick="return confirm('Are you sure ?')">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
              </form>
            </td>
				  </tr>
			    @endforeach
			</table>
		</div>
	</div>
@endsection
