<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}"/>
    <title>@yield('titulo') - Tello Store</title>
    <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="{{URL::asset('/js/app.js')}}"></script>
    <script src="{{URL::asset('/js/chart-movement.js')}}"></script>
    <script src="{{URL::asset('/js/mounthly-sales.js')}}"></script>
</head>
<body>

    <div class="wrapper">

        @yield('navbar-admin')

        <div class="main">

            @yield('navbar2-admin')

            @yield('admin-management-section')

            @yield('admin-panel-section')

            @yield('edit-product-section')

            @yield('product-manager-section')

            @yield('profile-admin-section')

            @yield('footer-admin')

        </div>
    </div>

</body>
</html>
