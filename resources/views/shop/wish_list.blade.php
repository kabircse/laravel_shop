@extends('layouts.landing')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
    <div class="container">
				<div class="col-md-10">
            <div class="product-info"><br />
  							<h2 class="text text-info">Products in cart</h2><br />
								<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
										<input type='hidden' name='sid' value='901315596' />
										<input type='hidden' name='mode' value='2CO' />
								  <table class="table table-hover table-bordered table-condensed">
								    <thead>
								      <tr>
								        <th class="text-center">No.</th>
								        <th class="text-center">Name</th>
								        <th class="text-center">Image</th>
								        <th class="text-center">Price</th>
								        <th class="text-center">Quantity</th>
								        <th class="text-center">Sub Total</th>
								        <th class="text-center">Delete</th>
								      </tr>
								    </thead>
								    <tbody class="product-form">
											<?php $i = 0; $price = 0;
											foreach ($products as $product):?>											
									      <tr>
													<input type='hidden' name='li_{{$i}}_type' value='product' />
													<input type='hidden' name='li_{{$i}}_name' value='{{ $product->name }}' />
													<input type='hidden' name='li_{{$i}}_price' value='{{ $product->price }}' />
													<input type='hidden' name='li_{{$i}}_quantity' class="qty2" value='1.00' />
													<input type='hidden' name='li_{{$i}}_recurrence' value='1 Month' />
													
													<td class="text-center">{{ ++$i }}</td>
									        <td class="text-center">{{ $product->name }}</td>
									        <td class="text-center"><img height="50" src="{{ asset('uploads/images/product/'.$product->image) }}"</img></td>
									        <td class="text-center price">{{ $product->price }}</td>
									        <td class="col-xs-2"><input type="number" name="qty[]" class="qty" value="1" required></td>
									        <td class="col-xs-2"><input type="text" name="sub_total" class="sub-total" value="{{$product->price}}" readonly></td>
													<td class="col-xs-1 delete-tr"><a href="#" class="btn-xs btn-danger">x</a></td>
									      </tr>
											<?php
												$price = $price+$product->price;												
											endforeach; ?>
											<input type='hidden' name='x_receipt_link_url' value='http://localhost/laravel_shop/public/order/create' />
									      <tr class="info">
													<td class="text-center"></td>
													<td class="text-center"><strong>Total</strong></td>
													<td class="text-center"></td>
													<td class="text-center"></td>
									        <td class="col-xs-2"><input type="number" name="total_qty" class="total-qty" value="{{$i}}" readonly></td>
									        <td class="col-xs-2"><input type="text" name="sub_total" class="total" value="{{$price}}" readonly></td>
													<td></td>
												</tr>
								    </tbody>
								  </table>
									<div class="col-sm-offset-9">
											<div class="btn-group buy-product" id="">
													<button class="btn btn-info buy">
															Buy
													</button>
											</div>
									</div>
								</form>
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
			.qty,.sub-total,.total-qty,.total{
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
				$('.product-form').on('change','.qty',function(){
						var tr = $(this).parent().parent();//$(this).closest('tr');
						var price = tr.find('.price').text();
						var qty = tr.find('.qty').val();
						tr.find('.qty2').val();
						var sub_total = parseFloat(price)*qty;
						tr.find('.sub-total').val(sub_total);
						calculate_total();
				});
				$('.buy').on('click',function(){
						if ($('.total-qty').val()<=0 || $('.total').val()<=0) {
							$('.alert-msg').empty();
							$('.alert-msg').addClass('btn-alert').append('Fillup the input correctly');
							modal_trigger_hide();
							return false;
            } else {
							$('form').submit();
						}
				});
				$('.product-form').on('click','.delete-tr',function(){
						$(this).parent().remove();//td<tr  ->remove
						calculate_total();
				});
				
				function calculate_total() {
					total_qty = 0;
					total = 0;
          $('.qty').each(function(){
							total_qty = parseFloat(total_qty) + parseFloat($(this).val());							
					});
					$('.total-qty').val(total_qty);
          $('.sub-total').each(function(){
							total = parseFloat(total) + parseFloat($(this).val());							
					});
					$('.total').val(total);
        }
			});
	</script>

@endsection
