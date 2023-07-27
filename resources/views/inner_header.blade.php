<!DOCTYPE html>
<html lang="en">
<head>
<title>OBC BJP Morcha | We Unit</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/intlTelInput.css" />
<link rel="stylesheet" href="css/demo.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/custom.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body style="overflow-x: hidden;" >
<section id="topbar" class="">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 right text-right col-12 col-md-12 col-sm-12">
<form method="get" accept-charset="utf-8" action="https://www.bjp.org/search/content"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div> <ul>
<li class="default-search hidden-xs">
<div class="form-group">
<input class="form-control search" type="text" placeholder="Search" name="keys">
<input type="submit" style="display: none;">
</div>
<ul id="searchAutocomplete" style="display: none;">
</ul>
</li>

<li> <a href="https://www.bjp.org/"><i class="fa fa-user-circle"></i> MY BJP</a> </li>
<li> <a class="statewebsite" href="https://www.bjp.org/stateoffice"> State Websites </a> </li>
<li> <a class="contact" href="https://www.bjp.org/contact-us"> Contact Us </a> </li>
<li>
<div class="dropdown">
<button type="button" class="btn-primary dropdown-toggle" data-toggle="dropdown"> English </button>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; return _ChangeLang('hi')">
हिन्दी</a>
</div>
</div>
</li>
<li class="hidden-xs hidden-sm ipad-footer-btn"> <a class="join" href="https://www.bjp.org/membership/en/home/donation"> JOIN BJP </a>
</li>
<li class="hidden-xs hidden-sm ipad-footer-btn"> <a class="join" href="https://www.bjp.org/membership/en/home/donation"> MAKE A DONATION </a>
</li>
</ul>
</form>
 </div>
</div>
</div>
</section>
<!----Menu Section ----->
<div class="region region-primary-menu"  style=" background: #e05716;">
<nav role="navigation" aria-labelledby="block-bjp-main-menu-menu" id="block-bjp-main-menu" class="navbar navbar-toggleable-md navbar-light bg-faded block-menu navigation menu--main">

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
<a class="navbar-brand" href="{{url('index')}}"> 
  <img src="img/logo-logo-inner.webp" alt="Bharatiya Janata Party" >
 </a>
<div id="navbarSupportedContent" class="navbar-collapse collapse">
<ul class="clearfix navbar-nav ml-auto my-2 my-lg-0 hidden-xs hidden-sm hidden-md visisble-lg ipad-mode">
<li class="nav-item dropdown"  style="margin-top:15px;">
 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
 The BJP
  </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
   <!-- <a class="dropdown-item" href="#">INTEGRAL HUMANISM</a> -->
      <a class="dropdown-item" href="https://www.bjp.org/historyoftheparty">HISTORY OF PARTY</a>
      <a class="dropdown-item" href="{{url('History_development')}}">HISTORY & DEVELOPMENT OF BJP</a>
      <!-- <a class="dropdown-item" href="#">ANTYODAYA</a>
      <a class="dropdown-item" href="#">CONSTITUTION</a> -->
</div>
</li>
<li class="nav-item dropdown"  style="margin-top:15px;">
 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
  About Us
  </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
   <a class="dropdown-item" href="{{url('obc_bjp_morcha')}}">The BJP OBC MORCHA</a>
      <a class="dropdown-item" href="{{url('national_team')}}">NATIONAL TEAM</a>
      <!-- <a class="dropdown-item" href="{{url('national_socialmediamember')}}">NATIONAL SOCIAL MEDIA TEAM</a> -->
      <a class="dropdown-item" href="{{url('obc_ministers')}}">OBC MINISTERS</a>
</div>
</li>
<li class="menu-item nav-item"  style="margin-top:15px;">
<a href="{{url('our_president')}}" class="nav-link" data-drupal-link-system-path="kamal-sandesh">OUR PRESIDENT</a>
</li>
<li class="menu-item nav-item"  style="margin-top:15px;">
<a href="https://www.bjp.org/kamal-sandesh" class="nav-link" data-drupal-link-system-path="bjp-live">KAMAL SANDESH</a>
</li>
<li class="menu-item nav-item"  style="margin-top:15px;">
<a href="{{url('gallery')}}" class="nav-link" data-drupal-link-system-path="bjp-live">GALLERY</a>
</li>
</ul>

</div>
</div>
</nav>
</div>
@yield('index')
<!----End Owl Slider--->
<div class="container-fluid" >
  <footer class="row row-cols-5 py-5 border-top" style="background:#1c1f34;">
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
     
      <a class="navbar-brand" href="https://www.bjp.org/"> <img src="img/11.png" alt="Bharatiya Janata Party"> </a>
      <p> </P>
      <p style="color:white;">Uplifting minorities to build a Nation World admires</p>
      
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
           
            <h5 class="text-uppercase fw-bold" style="
                font-size: 15px; color:white;">Important Links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 40px; background-color: orange; height: 1px"
                />
            <p>
              <a href="#!" class="text-white">Contact Us</a>
            </p>
            
            <p>
              <a href="#!" class="text-white">kamal Sandesh</a>
            </p>
            <p>
              <a href="#!" class="text-white">Our President</a>
            </p>
            <p>
              <a href="#!" class="text-white">Gallery</a>
            </p>
          </div>
    
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
           
            <h5 class="text-uppercase fw-bold" style="
                font-size: 15px; color:white;">Other Links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 40px; background-color: orange; height: 1px"
                />
            <p>
              <a href="#!" class="text-white">BJP Website</a>
            </p>
            <p>
              <a href="#!" class="text-white">Ministry of minority affairs</a>
            </p>
            <p>
              <a href="#!" class="text-white">National Commission for minorities</a>
            </p>
            <p>
              <a href="#!" class="text-white">Minority Welfare schemes</a>
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
           
            <h5 class="text-uppercase fw-bold" style="
                font-size: 15px;color:white;">Contact Details</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 40px; background-color: orange; height: 1px"
                />
            <p>
              <a href="#!" class="text-white"><b>BJP CENTRAL OFFICE:</b><br>6-A,Pandit Deen Dayal Upadhaya Marg,New Delhi-110002</a>
            </p>
            <p>
              <a href="#!" class="text-white"><b>E-MAIL</b><br>minoritymorcha@bjp.org</a>
            </p>
            <p>
              <a href="#!" class="text-white"><b>PHONE</b><br>011-23500000</a>
            </p>
          </div>          
    </div>
    
  </footer>
  <nav class="social">
          <ul>
              <li><a href="https://www.facebook.com/BJP4India"><i class="fa fa-facebook"></i><b>Facebook</b></a></li>
              <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FBJP4India"><i class="fa fa-twitter"></i><b>Twitter</b></a></li>
             
              <li><a href="https://www.youtube.com/BJP4India"><i class="fa fa-youtube"></i><b>YouTube</b></a></li>
              <li><a href="https://www.instagram.com/bjp4india/"><i class="fa fa-instagram"></i><b>Instagram</b></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=8920636828" traget="_blank"><i class="fa fa-whatsapp"></i><b>whatsapp</b></a></li>
          </ul>
      </nav>
</div>
 <script>
  var deadline = new Date("july 30, 2050 15:37:25").getTime();             
var x = setInterval(function() {
   var currentTime = new Date().getTime();                
   var t = deadline - currentTime; 
   var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
   var seconds = Math.floor((t % (1000 * 60)) / 1000); 
   document.getElementById("day").innerHTML =days ; 
   document.getElementById("hour").innerHTML =hours; 
   document.getElementById("minute").innerHTML = minutes; 
   document.getElementById("second").innerHTML =seconds; 
   if (t < 0) {
      clearInterval(x); 
      document.getElementById("time-up").innerHTML = "TIME UP"; 
      document.getElementById("day").innerHTML ='0'; 
      document.getElementById("hour").innerHTML ='0'; 
      document.getElementById("minute").innerHTML ='0' ; 
      document.getElementById("second").innerHTML = '0'; 
   } 
}, 1000);  

</script>
</body>
</html>