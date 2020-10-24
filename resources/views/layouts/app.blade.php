<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'KeyMe')</title>

        <link rel="icon" href="favicon.ico">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-vazir/Farsi-Digits/font-face-FD.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('fa5/css/all.css') }}">

        @yield('head')

    </head>

    <body>
        <div class="spinner-wrapper">
            <div class="spinner-text">
                <div class="spinner-border text-warning"></div>
                @lang('Please wait while we are getting things ready')
            </div>
        </div>
        
        @include('partials.sidebar')

        @include('partials.header')

        <div class="main-content">
            @yield('main-content')
        </div>

    </body>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('script')
    
</html>