<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tello Store | @yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="{{URL::asset('/vendor/glightbox/css/glightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{URL::asset('/vendor/nouislider/nouislider.min.css')}}">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{URL::asset('/vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{URL::asset('/vendor/swiper/swiper-bundle.min.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::asset('css/style.default.css')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::asset('/css/custom.css')}}">
    <!-- data-aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  </head>
  <body data-aos="fade-up">

      <div class="page-holder">

        @yield('navbar')

        {{-- INDEX --}}

        @yield('modal')
        @yield('contact-modal')
        @yield('profile-modal')

        @yield('hero_section')

        {{-- CHECKOUT --}}

        @yield('checkout_section')


        {{-- CART --}}

        @yield('cart_section')



        {{-- DETAIL --}}

        @yield('detail_section')

        {{-- SHOP --}}

        @yield('shop_section')

        @yield('product_section')

        @yield('lat_izq')


        @yield('footer')

      <!-- JavaScript files-->
      <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{URL::asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{URL::asset('vendor/nouislider/nouislider.min.js')}}"></script>
      <script src="{{URL::asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{URL::asset('vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
      <script src="{{URL::asset('js/front.js')}}"></script>
      <script src="{{URL::asset('js/icon-svg.js')}}"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>



      <!---<script src="{{URL::asset('js/range.js')}}"></script>-->


      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>
