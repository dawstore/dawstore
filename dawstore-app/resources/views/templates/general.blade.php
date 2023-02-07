<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tello Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

     <!-- gLightbox gallery-->
     <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
     <!-- Range slider-->
     <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
     <!-- Choices CSS-->
     <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
     <!-- Swiper slider-->
     <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
     <!-- Google fonts-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
     <!-- theme stylesheet-->
     <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
     <!-- Custom stylesheet - for your changes-->
     <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">

  </head>
  <body>
      <div class="page-holder">

        @yield('navbar')

        @yield('modal')

        @yield('hero_section')

        @yield('checkout_section')

        @yield('footer')

      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/front.js"></script>
      <script src="js/icon-svg.js"></script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>
