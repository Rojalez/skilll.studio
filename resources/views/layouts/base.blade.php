<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css')
</head>
<body>
<div>
    {{--    @if (Route::has('login'))--}}
    {{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
    {{--            @auth--}}
    {{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
    {{--            @else--}}
    {{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

    {{--                @if (Route::has('register'))--}}
    {{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
    {{--                @endif--}}
    {{--            @endauth--}}
    {{--        </div>--}}
    {{--    @endif--}}

    <div>
        @include('includes.header')
            <div class="mt-10 bg-white">
                @yield('content')
            </div>
        @include('includes.footer')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('js')
</body>
</html>
