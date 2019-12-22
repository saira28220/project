<html>
<head>
<title>Beauty - @yield('title')</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{
  background: url(pp.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
div{
margin-top:0;
}
nav{
  background:black;
}
nav li{
    margin:10 5 5 25;
    font-weight: bold;
    list-style-type:none;
    color:white;

}
.logo{
    margin:10 0 5 0;
   
}
footer li{
   margin:4 0 0 0;
    font-weight: light;
    list-style-type:none;
    color:white;
}
.bg-grey {
        background: #343a40;
     }
     .logo-footer {
        margin-bottom: 40px;
     }
     footer {
            color: E7D9D6;
     }
     footer p, a {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
}
footer h6 {
    font-family: 'Playfair Display', serif;
    margin-bottom: 40px;
    position: relative;
}
footer h6:after {
    position: absolute;
    content: "";
    background: grey;
    width: 12%;
    height: 1px;
    left: 0;
    bottom: -20px;
}
     .btn-footer {
                 color: grey;
                text-decoration: none;
                border: 1px 
     }
     i{
       width:20px;
     }
     .checked {
  color: YELLOW;
}

.carousel-item {
  height: 100vh;
  min-height: 35px;
  background: no-repeat;
  background-size: cover;

}

.centered {
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%, -50%);

}

</style>
<body>
@section('navbar')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="logo"class="rounded" src="logo.png" width="110"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('home')}}">HOME
              </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('about')}}">ABOUT</a>
        </li>
        <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      SHOP
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('men')}}">MEN</a>
        <a class="dropdown-item" href="{{url('women')}}">WOMEN</a>
    
      </div>
    </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('deals')}}">DEALS</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('lookbook')}}">LOOKBOOK</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('contact')}}">CONTACT</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" style="color:gold;"href="{{url('products')}}">ADMIN</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
@show
<!-- Page Content -->
<div>
@yield('content')
</div>


@section('footer')

<!-- Footer -->
<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="logo.png" class="w-50 logo-footer" >
                  <p style="text-align:justify;">our pride! Combining a scientific technology with vibrant colors resulted in an impressive abundance of products and colors to fall in love with. 95% of makeup cosmetics and accessories are manufactured in our own state of art facility. Far more importantly, high-quality ingredients go hand in hand with fair prices.</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> ABOUT COMPANY</h6><br>
               <div ><i class="fa fa-home"></i>   
               249 Ung Van Khiem St.,Binh ThanhDist, HCM</div>
               <div><i class="fa fa-phone"></i> (+92) 12345678987</div>
               <div><i class="fa fa-envelope"></i> saira0000@gmail.com</div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6 style="margin:0 0 0 32;">LINKS</h6>
               <div class="row ">
                  <div class="col-md-6"><br><br>
                     <ul>
                     <a href="{{ url('home') }}" > <li >  HOME</li></a>
                     <a href="{{ url('about') }}" ><li> ABOUT </li></a>
                     <a href="{{ url('arrivals') }}" ><li>  ARRIVALS </li></a>
                     <a href="{{ url('deals') }}" ><li>DEALS </li></a>
                     <a href="{{ url('lookbook') }}" > <li> LOOKBOOK </li></a>
                     <a href="{{ url('contact') }}" > <li>  CONTACT</li></a>
                     </ul>
                  </div>
                  
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> NEWSLETTER</h6>
               <div class="social">
                  <i class="fa fa-facebook" ></i>
                 <i class="fa fa-instagram" ></i>
                 <i class="fa fa-twitter"></i>
            <i class="fa fa-google-plus"></i>
               </div>
               <form class="form-footer my-3">
<!-- Another variation with a button -->
      <div class="input-group">
    <input type="text" class="form-control" placeholder="Search....">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
   </form>

            </div>
            <p>RATED AS: </p>
            <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
         </div>
         </div>
      </div>
      <marquee>BEAUTY COSMETICS & PERFUMES - 2019 COPYRIGHT &copy;</marquee>
      </footer>
      @show
</body>
</html>