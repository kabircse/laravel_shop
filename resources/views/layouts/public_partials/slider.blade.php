<div class="carousel slide" id="myCarousel">
    <div class="carousel-inner">
      <?php $i=1; ?>
      @foreach ($products as $product)
      <?php
        if($i==1)
          $active = 'active';
        else
          $active ='';
        $i++;
      ?>
      <div class="item {{ $active }}">
        <div class="col-xs-10 col-sm-3">
          <a class="thumbnail" href="#"><img width="235" height="100" src="{{ asset('/uploads/images/product/'.$product->image) }}" class="img-responsive img-thumbnail"></a>
            <div class = "caption" style="position:relative; margin-top:75%">
                <a href = "{{ URL::to('home/show',$product->id) }}" class = "btn btn-primary" role = "button">
                     {{ $product->name }} Tk. {{ $product->price }}
                </a>
          </div>
        </div>
      </div>
      @endforeach
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
      .carousel .item {
          height: 200px;
      }
      .item img {
          position: absolute;
          top: 0;
          left: 0;
          min-height: 200px;
      }
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
