@extends('layouts.landing')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
    <div class="container-fluid">
				<div class="col-md-12">
          <div class="row">
              <section id="contact" name="contact"></section>
                  <div id="footerwrap">
                      <div class="container">
                              <h3>Contact Us</h3><br/>
                          <div class="col-lg-5">
                              <h3>Address</h3>
                              <p>
                                  Av. Greenville 987,<br/>
                                  New York,<br/>
                                  90873<br/>
                                  United States
                              </p>
                          </div>
                  
                          <div class="col-sm-4">
                              <h3>Drop Us A Line</h3>
                              <br>
                              <form role="form" action="#" method="post" enctype="plain">
                                  <div class="form-group">
                                      <label for="name1">Your Name</label>
                                      <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="email1">Email address</label>
                                      <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label>Your Text</label>
                                      <textarea class="form-control" name="Message" rows="3"></textarea>
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
                              </form>
                          </div>
                      </div>
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
    </style>

@endsection