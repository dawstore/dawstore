<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tello Store | Register</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Styles -->
    {{-- @vite(['resources/js/app.js', 'resources/css/app.scss', 'public/css/register.css', 'public/js/register.js']) --}}
    <link rel="stylesheet" href="{{URL::asset('css/register.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}">


</head>
<body>

        @yield('content')
    

    <script src="{{URL::asset('js/register.js')}}"></script>
</body>
</html>
