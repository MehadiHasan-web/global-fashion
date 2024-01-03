<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

    <!-- CSS=========================================== -->
    @include('frontend.includes.head')
</head>

<body>
    @include('frontend.includes.header')
    @yield('content')

    @include('frontend.includes.footer')


    <!-- All JS is here
============================================ -->
    @include('frontend.includes.script');

    @livewireScripts
</body>

</html>
