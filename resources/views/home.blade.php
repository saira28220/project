@extends('layout')
@section('title','HOME')
@section('navbar')
@section('footer')
@parent
@endsection

@section('content')
<div style="background:rgba(73, 76, 80, 0.70);">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('p0.jpg')">
        <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center" style="color: white ;font-weight: bold;">NEW COLLECTION 2019<h2>
        <h1 class="text-center" style="color: rgba(163, 117, 61, 0.959) ;">BEST PERFUMES</h1>
<h5 class="text-center" style="color:  white;"> Thinking cause international development Andrew Carnegie democratic<br> the global financial system invest </h5>
<br><div class="text-center" style="margin:0 0 0 10;">
<button type="button" class="btn btn-light" style="width:150;height:50;background-color: rgba(197, 161, 117, 0.829);font-weight:bold;">SHOP NOW</button>
</div>
       <br><br><br><br></div>
      </div>
      
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('p5.jpg')">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="text-left" style="color:rgba(163, 117, 61, 0.959) ;">Beautify Yourself</h1>
<h4 class="text-left" style="color: black ;">“Beauty is power, and makeup is something that<br> really enhances that; it’s a woman’s secret.” <br>– Charlotte Tilbury</h4>

<br><br><br><br><br><br><br><br><br><br>
        </div>
        </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('p7.jpg')">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-right" style="color:rgba(163, 117, 61, 0.959) ;">Eternity Fragrance</h1>
<h4 class="text-right" style="color: white ;">“Your perfume is your message, your scented slogan. "<br>Art of Scent</h4>

<br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
 <!-- end-->

 <!-- top banner images -->
 <div style="background:  #212529;">
<br><br>
<div class="container" style="margin-bottom: -14px;">
<br><br>
<div class="row">
<div class="col-sm-4">
<img class="border border-light"class="rounded" width="350" height="350" src="h6.jpg"/>
<div class="centered"><h2 style="color:white;margin:0 0 0 15;">ARRIVALS <br><br><br><br><br></h2>
<button type="button" class="btn btn-light"style="width:200;height:50;background-color: rgba(197, 161, 117, 0.829);font-weight:bold;">WOMEN</button>
<br><button type="button" class="btn btn-light" style="width:200;height:50;background-color: rgba(197, 161, 117, 0.829);font-weight:bold;">MEN</button>
</div>
</div>

<div class="col-sm-4"> 
<img class="border border-light"class="rounded"width="350"  height="350" src="h3.jpg"/>
<div class="centered"><h2 style="color:white;">LOOKBOOK <br><br><br><br><br><br></h2>
<button type="button" class="btn btn-light" style="width:200;height:50;background-color: rgba(197, 161, 117, 0.829);font-weight:bold;">GALLERY</button>
</div>
</div>

<div class="col-sm-4">
<img  class="border border-light"class="rounded"width="350" height="350"src="H8.jpg"/>
<div class="centered"><h2 style="color:white;margin:0 0 0 35;">DEALS <br><br><br><br><br><br></h2>
<button type="button" class="btn btn-light" style="width:200;height:50;background-color: rgba(197, 161, 117, 0.829);font-weight:bold;">70% OFF</button>
</div>
</div>
</div>
<br><br>
</div>

</div>
<!--end-->

<!--new arrivals-->
<div class="container-fluid" style="background-color:  #212529,0.9;">
<h2 style="color:white;" class="text-center"><br><br>NEW ARRIVALS</h2>
<hr width="500"style="background:white;">
<br><br>
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height:0;">
                <div class="row">
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250" src="i1.jpg" alt="1 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250"src="i2.jpg" alt="2 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250"src="i3.jpg" alt="3 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250"src="i4.jpeg" alt="4 slide"></div>
                    <div class="col-sm"><img class="d-block w-100"width="320" height="250" src="i4.jpg" alt="5 slide"></div>
                </div>
            </div>
            <div class="carousel-item "style="height:0;">
                <div class="row">
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250"src="i5.jpg" alt="4 slide"></div>
                    <div class="col-sm"><img class="d-block w-100"width="320" height="250" src="i6.jpg" alt="5 slide"></div>
                    <div class="col-sm"><img class="d-block w-100"width="320" height="250"src="i7.jpg" alt="6 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" width="320" height="250"src="i8.jpg" alt="7 slide"></div>
                    <div class="col-sm"><img class="d-block w-100"width="320" height="250" src="i9.jpeg" alt="4 slide"></div>
                  </div>
                  
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
</div>
</div>

<div class="container-fluid" style="background:url(f.jpg);">
<br><br><br> <h4 class="text-center" style="color:white;">EMAIL FOR NEWSLETTER</h4><br>
<hr width="500"style="background:white;">
<h6 style="color:silver;" class="text-center"><br>Nutrition, pursue these aspirations sanitation theory of social <br>change liberal. Emergency response social challenges shifting landscape. Provide medicine, convener cornerstone meaningful work.<br><br>
<span style="color:gold;text-transform:uppercase;" >Enter your email address</span><br><br><br>
</h6>
<div class="text-center">
<input  style="width:400;height:50;opacity:0.6;"type="text" placeholder="  Subscribe for newsletter.. "/>
<button type="button"  style="width:120;height:50;background-color: rgba(197, 161, 0, 0.829);font-weight:bold;">SUBSCRIBE</button></div><br><br><br><br>
</div>
</div>

<!--end-->

</div>
@endsection


