<!DOCTYPE html>
<html  lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tello Store | Index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    

    <!-- ========================= CSS  ========================= -->
    <link rel="stylesheet" href=href="{!! asset('../../css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../../css/glightbox.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../../css/LineIcons.3.0.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../../css/login.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../../css/main.css') !!}" />
    <link rel="stylesheet" href="{!! asset('../../css/tiny-slider.css') !!}" />

     <!-- ========================= JS  ========================= -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/tiny-slider.js"></script>
    <script src="../../js/glightbox.min.js"></script>
    <script src="../../js/main.js"></script>


</head>

<body>

    @yield('preload')

    @yield('header')

    @yield('hero')

    @yield('trending_product')

    @yield('call_action')

    @yield('banner')

    @yield('shipping_info')

    @yield('footer')


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
</body>
</html>