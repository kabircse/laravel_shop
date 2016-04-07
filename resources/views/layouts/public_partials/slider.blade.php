<div class="carousel slide" id="myCarousel">
  <div class="carousel-inner">
    <div class="item active">
      <div class="col-xs-3">
		<a href="/dfdf/dfdf"><img src="http://placehold.it/500/e499e4/fff&amp;text=1" class="img-responsive"></a>
        <button class="btn btn-success" href="#">
          <i class="icon-shopping-cart icon-white"></i>
          Add to cart
        </button><br/>
          <span style="position: absolute">fdfdf fdfd sfdsfsdf dsfds</span>
      </div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/e477e4/fff&amp;text=2" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/fcfcfc/333&amp;text=3" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=4" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/f566f5/333&amp;text=5" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/f477f4/fff&amp;text=6" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/eeeeee&amp;text=7" class="img-responsive"></a></div>
    </div>
    <div class="item">
      <div class="col-xs-3"><a href="#"><img src="http://placehold.it/500/fcfcfc/333&amp;text=8" class="img-responsive"></a></div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>

                      
    <style>
	  .carousel-inner .active.left { left: -25%; }
	  .carousel-inner .next        { left:  25%; }
	  .carousel-inner .prev		 { left: -25%; }
	  .carousel-control 			 { width:  2%; }
	  .carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
    </style>
    <script>
      $(function(){
		  $('#myCarousel').carousel({
			interval: 4000
		  });
		  $('.carousel .item').each(function(){
			var next = $(this).next();
			if (!next.length) {
			  next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
			
			for (var i=0;i<2;i++) {
			  next=next.next();
			  if (!next.length) {
				  next = $(this).siblings(':first');
			  }			  
			  next.children(':first-child').clone().appendTo($(this));
			}
		  });
      });
      </script>