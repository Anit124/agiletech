@extends('header')
@section('index')
<style>
.carousel-item{min-height:300px; background:#ccc; }
</style>
<div class="container" style="margin-top:15px;">
<div class="row">
<aside class="col-md-6">
    	    <p>Event Gallery</p>
<!-- ================== 1-carousel bootstrap  ==================  -->
<div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1_indicator" data-slide-to="1"></li>
    <li data-target="#carousel1_indicator" data-slide-to="2"></li>
  </ol>  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide1.jpg" alt="First slide"> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide3.jpg" alt="Third slide">
    </div>
  </div>

</div> 
<!-- ==================  1-carousel bootstrap ==================  .// -->		
	</aside> <!-- col.// -->
	<aside class="col-md-6">
	    <p>Event caption</p>
<!-- 2-carousel bootstrap -->
<div id="carousel2_indicator" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide1.jpg" alt="First slide">
      <article class="carousel-caption d-none d-md-block">
	    <h5>First slide label</h5>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt.</p>
	  </article> <!-- carousel-caption .// -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide2.jpg" alt="Second slide">
      <article class="carousel-caption d-none d-md-block">
	    <h5>Second slide label</h5>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt.</p>
	  </article> <!-- carousel-caption .// -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://bootstrap-ecommerce.com/main/images/banners/slide3.jpg" alt="Third slide">
      <article class="carousel-caption d-none d-md-block">
	    <h5>Third slide label</h5>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt</p>
	  </article> <!-- carousel-caption .// -->
    </div>
  </div>
 
</div> 
<!-- ==================  2-carousel bootstrap.// ==================  -->	
	</aside>
</div>
	</div>
</div><br><br>
<!--container end.//-->
@endsection
