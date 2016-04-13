@extends('layouts.app',['headerTitle'=>'Product List','contentTitle'=>'Product'])

@section('main-content')
    <div class="container">
		<div class="col-md-7 col-md-offset-1">
			<h2>Product List</h2>
			<table class="dataTable table table-striped table-bordered table-hover table-condensed">
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
  					<td><img class="img-thumbnail" width="50" height="70" src="{{ asset('/uploads/images/product/'.$product->image) }}"/></td>
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
          <div style="text-align:center" class="no-print">
              {{ $products->render() }}
          </div>
		</div>
	</div>
@endsection
