@extends('layouts.app',['headerTitle'=>'Product List','contentTitle'=>'Product'])

@section('main-content')
    <div class="container">
		<div class="col-md-5 col-md-offset-1">
			<h2>Product List</h2>
			<table class="table table-striped table-bordered table-hover table-condensed">
			  <thead>
				<tr>
				  <th>Firstname</th>
				  <th>Lastname</th>
				  <th>Email</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>John</td>
				  <td>Doe</td>
				  <td>john@example.com</td>
				</tr>
				<tr>
				  <td>Mary</td>
				  <td>Moe</td>
				  <td>mary@example.com</td>
				</tr>
				<tr>
				  <td>July</td>
				  <td>Dooley</td>
				  <td>july@example.com</td>
				</tr>
			  </tbody>
			</table>
		</div>
	</div>
@endsection