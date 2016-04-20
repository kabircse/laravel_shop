@extends('layouts.landing')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
    <div class="container">
				<div class="col-md-10">
            <div class="product-info"><br />
  							<h2 class="text text-info">Products in cart</h2><br />
								  <table class="table table-hover table-bordered table-condensed">
								    <thead>
								      <tr>
								        <th class="text-center">No.</th>
								        <th class="text-center">Name</th>
								        <th class="text-center">Image</th>
								        <th class="text-center">Price</th>
								        <th class="text-center">Quantity</th>
								        <th class="text-center">Sub Total</th>
								      </tr>
								    </thead>
								    <tbody>
											<?php $i = 1;
											foreach ($products as $product):?>
									      <tr>
													<td class="text-center">{{ $i++ }}</td>
									        <td class="text-center">{{ $product->name }}</td>
									        <td class="text-center"><img height="50" src="{{ asset('uploads/images/product/'.$product->image) }}"</img></td>
									        <td class="text-center">{{ $product->price }}</td>
									        <td class="col-xs-2"><input type="number" name="qty" class="qty" value="1"></td>
									        <td class="col-xs-2"><input type="text" name="total" class="sub-total" value="" readonly></td>
									      </tr>
											<?php endforeach; ?>
									      <tr class="info">
													<td class="text-center"></td>
													<td class="text-center">Total</td>
													<td class="text-center"></td>
													<td class="text-center"></td>
													<td class="text-center toal-qty"><strong>4</strong></td>
													<td class="text-center total-cost"><strong>452.00</strong></td>
												</tr>
								    </tbody>
								  </table>
									<div class="col-sm-offset-9">
											<div class="btn-group buy-product" id="">
												<a href="#" class="btn btn-info">
													Buy now
												</a>
											</div>
									</div>
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
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
    <style>
			.product-info {
				max-width: 1140px;
				background: #fff;
				margin: 0 auto;
				margin-top: 25px;
				margin-bottom: 10px;
				border: 0px;
				border-radius: 1px;
			}
			.qty,.sub-total{
				width: 50%;
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
