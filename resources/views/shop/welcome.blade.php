@extends('layouts.landing')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
    @include('layouts.public_partials.slider')
    <div class="container">
		<div class="col-md-10 col-md-offset-2">
			<br/>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Top Items</a></li>
				<li><a data-toggle="tab" href="#menu1">New Items</a></li>
			</ul>
		  
			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
				<p>Some content.</p>
				<p>Some content.</p>
				<p>Some content.</p>
			  </div>
			  <div id="menu1" class="tab-pane fade">
				<p>Some content in menu 1.</p>
				<p>Some content in menu 1.</p>
				<p>Some content in menu 1.</p>
				<p>Some content in menu 1.</p>
			  </div>
			</div>
		</div>
	</div>
@endsection