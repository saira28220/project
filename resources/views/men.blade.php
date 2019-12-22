@extends('layout')
@section('title','MEN')
@section('navbar')
@section('footer')
@parent
@endsection

@section('content')
<br><br><br><br><br><br><br>
<div class="container" style="background: rgba(33,37,41, 0.80);color:white;font-weight:bold;">
<br><br>
<h1 class="text-center">MEN</h1>
<hr width="500"style="background:white;"><br>
<div class="row" style="color:white;">
<div class="col-sm-3">
<img src="m1.jpg" data-toggle="modal" data-target="#myModal"/>
    
  <!-- The Modal -->
  <div  class="modal" id="myModal" style="margin: 30 0 0 0;color:black;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" class="text-center">La Nuit De L'homme<br>
by Yves Saint Laurent
Cologne<br></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <img src="m1.jpg" />
        <h4>ID: </h4>
        <h4>Name: </h4> 
        <h4>Description: </h4>
        <h4>Company: </h4> 
        <h4>Price: </h4> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<h6 class="text-center"><br>La Nuit De L'homme<br>
by Yves Saint Laurent
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $16.84</button></h6>
</div>

<div class="col-sm-3">
<img src="m2.jpg"/>
<h6 class="text-center"><br>New York<br>
by Yves Saint Laurent
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $26.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m3.jpg"/>
<h6 class="text-center"><br>Wanted<br>
by Azzaro
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $16.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m5.jpg"/>
<h6 class="text-center"><br>Armani<br>
by Kelvin Celvin
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $46.84</button></h6>
</div>
</div>
<br>

<div class="row" style="color:white;">
<div class="col-sm-3">
<img src="m9.jpg"/>
<h6 class="text-center"><br>Truth<br>
by Calvin klen
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $36.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m6.jpg"/>
<h6 class="text-center"><br>Jimmy Choo<br>
by Yves Saint Laurent
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $86.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m7.jpg"/>
<h6 class="text-center"><br>Boss<br>
by Azzaro
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $22.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m8.jpg"/>
<h6 class="text-center"><br>L'homme Prada<br>
by Azzaroo
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $16.84</button></h6>
</div>
</div>
<br>

<div class="row" style="color:white;">
<div class="col-sm-3">
<img src="m10.jpg"/>
<h6 class="text-center"><br>Le Bateleur<br>
by Calvin klen
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $19.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m11.jpg"/>
<h6 class="text-center"><br>Reveal<br>
by Yves Saint Laurent
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $54.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m12.jpg"/>
<h6 class="text-center"><br>Chrome United<br>
by Azzaro
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $12.84</button></h6>
</div>
<div class="col-sm-3">
<img src="m13.jpg"/>
<h6 class="text-center"><br>Bvlgari<br>
by Extreme
Cologne<br>
<button class="btn btn-light"style="margin:8 0 0 0;"> $23.84</button></h6>
</div>
</div>
<br>

</div>
<br><br>
@endsection