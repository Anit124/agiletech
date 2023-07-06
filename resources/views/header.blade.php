<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <title>Welcome Central Detective Training Institute, Ghaziabad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        </head>
     <body>
      <div class="container-fluid" style="background: #123e64e0; padding: 3px;">
        <div class="container">
            <div class="row">
               <div class="col-md-7 col-sm-7 col-lg-7">
               <ul class="social-network social-circle">
                       
                        <li>
                        <i class="fa fa-facebook" id="facebook"></i>
                        </li>
                        <li>
                         <i class="fa fa-twitter"></i>
                        </li>
                        <li>
                          <i class="fa fa-youtube"></i>
                     </li> 
                    </ul>	
                    <i class="fa fa-search"></i>			
			      	</div>
               <div class="col-md-5 col-sm-5 col-lg-5">
                <div class="row" style="margin-top: 7px;">

                   <div class="col-md-3 col-sm-3 col-lg-3">
                    <p class="skip">Skip to main content</p>
                   </div>
                   <div class="col-md-3 col-sm-3 col-lg-3">
                   <p class="skip" style="width:120px;">Screen Reader Access</p>
                   </div>
                   <div class="col-md-3 col-sm-3 col-lg-3">
                      <div class="row">
                         <div class="col-md-4 col-sm-4 col-lg-4">
                         <p class="skip" >A-</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <p class="skip" >A</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <p class="skip" >A+</p>
                        </div>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-3 col-lg-3">
                        <!-- <li class="dropdown" style="list-style-type: none; color:white;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Hindi
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        </ul>
                    </li> -->
                    <div id="google_element"></div>
                    <script>
                      function loadGoogleTranslate()
                      {
                        new google.translate.TranslateElement
                        ("google_element");
                      }
                   </script>
                  </div>
               </div>
               </div>
            </div>
         </div>
         
       </div>
       <!--------Main Part ---------------->
       <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
              <img src="img/logo.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
              <img src="img/g20.png" alt="" class="" id="g20">
             
                <img src="img/75azadi.png" alt="" class=""  id="azadi">
                
                 <img src="img/swach-bharat.png" alt="" class=""  id="swach-bharat">
            
              <!-- <img src="img/g20.png" alt="" class="img-responsive" id="g20">
              <img src="img/75azadi.png" alt="" class="img-responsive"  id="g20">
              <img src="img/swach-bharat.png" alt="" class="img-responsive"  id="g20"> -->
           </div>
           <div class="col-md-2 col-sm-2 col-lg-2">
           <img src="img/narendra_modi.png" alt="" class=""  id="modi">
           <img src="img/images.jpg" alt="" class=""  id="amit">
            </div>
          </div>
          <div class="main">
          <nav class="navbar navbar-default" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                          class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="">Logo</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="#" class="home"><span class="glyphicon glyphicon-home"></span></a></li>
                      <li><a href="#">About us</a></li>
                      <li >
                        <a href="#" class="" >Organisation Structure </a>
                        
                      </li>
                      <li>
                        <a href="#" class="" >Training/Courses</a> 
                      </li>
                    
                      <li >
                        <a href="#" class="" >E-Ustad</a>
                        
                      </li>
                      <li >
                        <a href="#" class="" >E-Library </a>
                        
                      </li>
                      <li >
                        <a href="#" class="" >Tender </a>
                        
                      </li>
                      <li >
                        <a href="#" class="" >New Events </a>
                        
                      </li>
                      <li >
                        <a href="#" class="" >Monoprogram of BPRD & CDTI </a>
                        
                      </li>
                      <li >
                        <a href="#" class="" >Other Important Link </a>
                        
                      </li>
                    
                  <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#" class="home1"><span class="glyphicon glyphicon-th-list"></span></a></li>
               
                </ul>
              </div>
              <!-- /.navbar-collapse -->
          </nav>
      </div>
      
        </div>
@yield('index')

        <footer>
<nav class="navbar navbar-default" style="background-color: #d995a1 !important; ">
  <div class="container">
    <ul class="nav navbar-nav">
      <li class=""><a href="#" class="last-nav">Help</a></li>
      <li class=""><a href="#" class="last-nav"> Press/News</a></li>
      <li class=""><a href="#" class="last-nav">Sitemap</a></li>
      <li class=""><a href="#" class="last-nav">Option</a></li>
      <li><a href="#" class="last-nav">Accessibility </a></li>
      <li><a href="#" class="last-nav">Privacy Policy</a></li>
      <li><a href="#" class="last-nav">HyperLink Policy</a></li>
      <li><a href="#" class="last-nav">Copyright Policy</a></li>
      <li><a href="#" class="last-nav">Terms and Condition</a></li>
      <li><a href="#" class="last-nav">Other Link</a></li>
      <li><a href="#" class="last-nav">RTI</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid" id="footer-section">
    <div class="last-top">
        <p class="BPRD"> This Website belong to the police research and development <br>
            Ministry of Home Affairs, Govt of India site Designed by Agile Tech Solution
            
             
           </p>
           <div class="row">
              <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">

               </div>
               <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
               <p class="updated">Last Updated - 34678</p>
               </div>
               <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
               <p class="update">Last Update - 01/07/2023</p>
               </div>
               <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">

              </div>
           </div>
          
         
    </div>
</div>

</footer>
<script>
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
  $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>
<script>(function(w, d) { w.CollectId = "64a2640a3584d8a3c86dcdad"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    </body>
</html>
