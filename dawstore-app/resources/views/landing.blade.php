<!DOCTYPE HTML>
<html lang="zxx">
   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>
      <meta name="author" content=""/>
      <!--Favicons-->
      <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}">
      <!--Page Title-->
      <title>Tello Store - Landing Page</title>

      <!-- Stylesheets -->

      <!-- bootstrap -->
      <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
      <!-- Aos Css-->
      <link rel="stylesheet" href="{{URL::asset('/css/aos-landing.css')}}"/>
      <!-- Themify icon -->
      <link rel="stylesheet" href="{{URL::asset('/css/themify-icons-landing.css')}}"/>
      <!-- main css -->
      <link rel="stylesheet" href="{{URL::asset('/css/style-landing.css')}}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

   </head>
   <body>

      <!-- Preloder -->
      <div id="preloder">
         <div class="loader"></div>
      </div>
      <!-- Εnd Preloader -->

      <div class="wrapper">
         <div class="hero-section">
            <div class="nav">
               <!-- Logo -->
               <div class="artist">&Hopf;</div>
               <div class="menu menu-btn cursor-item"><a href="#"><span>Menu</span><i class="bi bi-list"></i></a></div>
            </div>
            <div id="menu-overlay">
               <div class="block b1"></div>
               <div class="block b2"></div>
               <div class="block b3"></div>
               <div class="block b4"></div>
            </div>
            <div class="strips">
               <div class="strip null"></div>
               <div class="strip one"></div>
               <div class="strip two"></div>
               <div class="strip three"></div>
            </div>

            <!-- Main menu -->
            <div class="menu-list" id="menu">
               <ul>
                  <li><a href="index.html" class="cursor-item active">Home</a></li>
                  <li><a href="about.html" class="cursor-item">About</a></li>
                  <li><a href="portfolio.html" class="cursor-item">Portfolio</a></li>
                  <li><a href="blog.html" class="cursor-item">Blog</a></li>
                  <li><a href="contact.html" class="cursor-item">Contact</a></li>
               </ul>
            </div>
            <div class="menu-list-info">
               <ul>
                  <li>
                     Phone<br>
                     <p>+34 691386745<p>
                  </li>
                  <li>
                     Email<br>
                     <p>telloInfo@store.com</p>
                  </li>
                  <li>
                     Address<br>
                     <p>41500 Mayo Street<br>Alcala de Guadaíra</p>
                  </li>
                  <!-- Copyright -->
                  <li class="copyright">
                     <p>&copy;Copyright 2023. All rights reserved</p>
                  </li>
               </ul>
            </div>
            <!-- Social -->
            <div class="menu-social-warp">
               <div class="menu-social">
                  <a href="#" class="cursor-item">Instagram</a>
                  <a href="#" class="cursor-item">Behance</a>
                  <a href="#" class="cursor-item">Dribble</a>
                  <a href="#" class="cursor-item">Facebook</a>
               </div>
            </div>
             <!-- Main menu end -->


            <div class="omega">Tello</div>
            <div class="container">
               <div class="row text-center">
                  <div class="hero-gif cursor-item">
                    <video src="../../public/img/landing/loading.mp4"></video>
                  </div>
                  <div class="main-title">
                     <h1>We are <span>Creative</span> <br>Tello Shoes</h1>
                     <a class="btn-slice cursor-item" href="{{URL('/')}}">
                        <div class="top"><span>Tienda</span></div>
                        <div class="bottom"><span>Tienda</span></div>
                     </a>
                  </div>
                  <div class="ellipse-container">
                     <div class="ellipse ellipse__outer--thin">
                        <div class="ellipse ellipse_orbit"></div>
                     </div>
                     <div class="ellipse ellipse__outer--thick">
                     </div>
                  </div>
               </div>
            </div>
            <!-- Sound button -->
            <div class="button-wrap cursor-item">
               <div class="icon-wrap parallax-wrap">
                  <div class="button-icon parallax-element">
                     <div class="bars">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="gif-overlay"></div>

      </div>

      <div class="cursor"></div>
      <div class="cursor-follower"></div>

      <!-- jquery -->
      <script src="{{URL::asset('/js/query-3.4.1.min.js')}}"></script>
      <!-- bootstrap -->
      <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
      <!-- tweenmax - gsap -->
      <script src="{{URL::asset('/js/TweenMax.min.js')}}"></script>
      <!-- circletype-->
      <script src="{{URL::asset('/js/circletype.min-landing.js')}}"></script>
      <!-- Aos -->
      <script src="{{URL::asset('/js/aos-landing.js')}}"></script>
      <!-- ionicons -->
      <script src="{{URL::asset('/js/ionicons-landing.js')}}"></script>
      <!-- custom -->
      <script src="{{URL::asset('/js/custom-landing.js')}}"></script>

   </body>
</html>
