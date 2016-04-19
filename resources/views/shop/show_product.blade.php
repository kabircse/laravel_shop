@extends('layouts.landing')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
    <div class="container">
				<div class="col-md-12">
            <div class="product-info">
    <div class="row">
		<div class="">
					<div class="product col-md-4">
						<center>
							<img id="item-display" src="{{ asset('/uploads/images/product/'.$product->image) }}" alt=""></img>
						</center>
					</div>
				</div>
				<div class="col-md-6">
                    <br/>
					<label>{{ $product->name }}</label><label class="pull-right text-primary">$ {{ $product->price }}</label>
                    <br/><br/><br/>
					<span>{{ $product->description }}</span>
					<hr>
					<div class="btn-group cart-add" id="{{ $product->id }}">
						<button type="button" class="btn btn-success">
							Add to cart
						</button>
					</div>
					<div class="btn-group cart-addwish" id="{{ $product->id }}">
						<button type="button" class="btn btn-danger">
							Add to wishlist
						</button>
					</div>
				</div>
			</div>
		<div class="container-fluid">
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						<li class="active"><a href="#service-one" data-toggle="tab">REVIEWS</a></li>
						<li><a href="#service-two" data-toggle="tab">Make a review</a></li>
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">

							<section class="container product-info">
								The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

								<h3>Corsair Gaming Series GS600 Features:</h3>
								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
								<li>Extra long fully-sleeved cables support full tower chassis</li>

							</section>

						</div>
					<div class="tab-pane fade" id="service-two">
						<section class="container">
                <h3>Review Form</h3>
								<div class="col-lg-7">
				            <form role="form" action="#" method="post" enctype="plain">
				                <div class="form-group">
				                    <label>Your Text</label>
				                    <textarea class="form-control" name="Message" rows="4" cols="4"></textarea>
				                </div>
				                <br>
				                <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
				            </form>
				        </div>
						</section>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>



        <div class="col-md-10">
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
                        <p>Some content.</p>
                        <p>Some content.</p>
                        <p>Some content.</p>
                        <p>Some content.</p>
                        <p>Some content.</p>
                        <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                    <p>Some content in menu 1.</p>
                </div>
            </div>
        </div>
        </div>
</div>
    <style>
			.gold{
				color: #FFBF00;
			}

			/*********************************************
								PRODUCTS
			*********************************************/

			.product{
				margin-left: 15px;
				border: 1px solid #dddddd;
				height: 320px;
			}

			.product>img{
				max-width: 230px;
			}

			.product-rating{
				font-size: 20px;
				margin-bottom: 25px;
			}

			.product-desc{
				font-size: 14px;
			}

			.product-price{
				font-size: 22px;
			}

			.product-stock{
				color: #74DF00;
				font-size: 20px;
				margin-top: 10px;
			}


			/*********************************************
								VIEW
			*********************************************/

			.product-info {
				max-width: 1140px;
				background: #fff;
				margin: 0 auto;
				margin-top: 25px;
				margin-bottom: 10px;
				border: 0px;
				border-radius: 1px;
			}

			.view-wrapper {
				float: right;
				max-width: 70%;
				margin-top: 25px;
			}

			.container {
				padding-left: 0px;
				padding-right: 0px;
				max-width: 100%;
			}

			.service1-items {
				padding: 0px 0 0px 0;
				float: left;
				position: relative;
				overflow: hidden;
				max-width: 100%;
				height: 321px;
				width: 130px;
			}

			.service1-item {
				height: 107px;
				width: 120px;
				display: block;
				float: left;
				position: relative;
				padding-right: 20px;
				border-right: 1px solid #DDD;
				border-top: 1px solid #DDD;
				border-bottom: 1px solid #DDD;
			}

			.service1-item > img {
				max-height: 110px;
				max-width: 110px;
				opacity: 0.6;
				transition: all .2s ease-in;
				-o-transition: all .2s ease-in;
				-moz-transition: all .2s ease-in;
				-webkit-transition: all .2s ease-in;
			}

			.service1-item > img:hover {
				cursor: pointer;
				opacity: 1;
			}

			.service-image-left {
				padding-right: 50px;
			}

			.service-image-right {
				padding-left: 50px;
			}

			.service-image-left > center > img,.service-image-right > center > img{
				max-height: 155px;
			}
    </style>
    <script>
			$(function(){
				$('.cart-add').on('click',function(){
						var product_id = $(this).attr('id');
						var url = "<?php echo url('cart/add'); ?>";
						$.get(url,{product_id:product_id},function(data){
							status = data.status;
							$('.alert-msg').empty();
							$('.alert-msg').addClass('btn-alert').append(status);
								modal_trigger_hide();
						});
        });
				$('.cart-addwish').on('click',function(){
						var product_id = $(this).attr('id');
						var url = "<?php echo url('wish/store'); ?>";
						$.get(url,{product_id:product_id},function(data){
							status = data.status;
							$('.alert-msg').empty();
							$('.alert-msg').addClass('btn-alert').append(status);
								modal_trigger_hide();
						});
        });
			});
	</script>

@endsection
