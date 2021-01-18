<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Oline Watch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
 <div class="wrap">
   <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md d-flex align-items-center">
       <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
     </div>
     <div class="col-12 col-md d-flex justify-content-md-end">
       <div class="social-media">
        <p class="mb-0 d-flex">
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
       </p>
     </div>
   </div>
 </div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
 <a class="navbar-brand d-flex align-items-center" href="index.html"><img src="images/v6.png" style="height:50px; width:50px;"><h1>Beauty<span class="mini">Watch</span></h1></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
       <li><a href="/shoppingcart" class="nav-link" style="color:#000;margin-top:8%">
                <span class="badge">
                     {{Session::has('cart') ? Session::get('cart')->totalQty: ''}}
                </span>
                    shopping cart</a></li>
       <li class="nav-item active"><a href="services.html" class="nav-link">Services</a></li>


     </ul>
   </div>
 </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/d1.jpg'); height:900px" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Our Services</h1>
     </div>
   </div>
 </div>
</section>
<br><br><br><br><br><br>

<div class="container">
@foreach($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach($productChunk as $product)
          <div class="col-sm-6 col-md-4">
            <div class="product-item">
              <figure>
              <img src="images/d2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
              </figure>
              <div class="px-4">
                <h3><a href="#">{{$product->title}}</a></h3>
               
                <p class="mb-4">{{$product->description}}</p>
                <h1>{{$product->price}}
                <div>
                  <a href="/addtocart/{{$product->id}}" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
        
        @endforeach
      </div>
  
    </div>

<br><br><br><br><br><br>
<footer class="ftco-footer">
  <div class="container mb-5 pb-4">
    <div class="row">
      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="logo d-flex align-items-center">
           <a href="#" class="d-flex align-items-center">
            <div class="icon"><a class="navbar-brand d-flex align-items-center" href="index.html"><img src="images/v6.png" style="height:40px; width:40px;"><h1>Beauty<span class="mini">Watch</span></h1></a></div>
           
         </a>
       </h2>
       <p>Free delivery and affordable prices for everyone.</p>
       <ul class="ftco-footer-social list-unstyled mt-4">
        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
      </ul>
    </div>
  </div>
<br><hr><hr><hr><hr>

  <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Services</h2>
      <ul class="list-unstyled">
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Sale


</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Repairing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Show</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>marketing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Battery change</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Belt changed</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>The clock changes</a></li>
      </ul>
    </div>
  </div>

  <div class="col-lg-2 col-md-6">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Links</h2>
      <ul class="list-unstyled">
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Groomer</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Pricing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
     <h2 class="ftco-heading-2">Have a Questions?</h2>
     <div class="block-23 mb-3">
       <ul>
         <li><span class="fa fa-map-marker mr-3"></span><span class="text">Gaza Omar al-Mukhtar next to Jerada for bags.</span></li>
         <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+2 392 3929 210</span></a></li>
         <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">info@yourdomain.com</span></a></li>
       </ul>
     </div>
   </div>
 </div>
</div>
</div>
<div class="container-fluid bg-primary py-5">
 <div class="row">
  <div class="col-md-12 text-center">
   
    <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">WEB GROUP</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>

</body>
</html>