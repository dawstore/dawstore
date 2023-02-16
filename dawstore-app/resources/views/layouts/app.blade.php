<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tello Store | Login</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    {{-- @vite(['resources/js/app.js', 'resources/css/app.scss']) --}}
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}">
</head>
<body>
    <div id="app">
        <main class="pt-4">
            @yield('content')
        </main>
    </div>
</body>
</html>