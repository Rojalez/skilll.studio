<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="SkillUp Studio">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Skilll.Studio">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @stack('css')
</head>
<body class="mx-auto w-full max-w-screen-2xl">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('js')
</body>
</html>
