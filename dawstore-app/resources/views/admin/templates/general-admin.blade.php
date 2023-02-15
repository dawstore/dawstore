<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}"/>
    <title>Tello Store | @yield('titulo')</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @notifyCss
    <script src="{{URL::asset('/js/app.js')}}"></script>
    <script src="{{URL::asset('/js/chart-movement.js')}}"></script>
    <script src="{{URL::asset('/js/mounthly-sales.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @notifyJs

</head>
<body>
<x:notify-messages />

    <div class="wrapper pageLoader">

        @yield('navbar-admin')

        <div class="main">

            @yield('navbar2-admin')

            @yield('admin-management-section')

            @yield('admin-panel-section')

            @yield('edit-product-section')

            @yield('product-manager-section')

            @yield('category-manager-section')

            @yield('brand-manager-section')

            @yield('edit-category-section')

            @yield('edit-brand-section')
            
            @yield('profile-admin-section')

            @yield('footer-admin')

        </div>
    </div>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>

