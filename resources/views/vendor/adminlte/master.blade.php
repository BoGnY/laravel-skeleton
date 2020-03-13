<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{csrf_token()}}">

        {{-- Meta tags --}}
        <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
            @yield('title', config('adminlte.title', 'AdminLTE 3'))
            @yield('title_postfix', config('adminlte.title_postfix', ''))
        </title>
        @yield('meta_tags')

        {{-- Head Javascripts --}}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js' integrity='sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js' integrity='sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=' crossorigin='anonymous'></script>
        <![endif]-->

        {{-- Fonts --}}
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">

        {{-- Styles --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.0/css/OverlayScrollbars.min.css" integrity="sha256-ptcJ2ATx4B98UDoHo1jwcbO4bdT5sENYSw759fJY3Ek=" crossorigin="anonymous">
        @yield('adminlte_css_pre')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/css/adminlte.min.css" integrity="sha256-tDEOZyJ9BuKWB+BOSc6dE4cI0uNznodJMx11eWZ7jJ4=" crossorigin="anonymous">
        @include('adminlte::plugins', ['type' => 'css'])
        {{-- Custom  Styles --}}
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" crossorigin="anonymous">
        @yield('adminlte_css')

        @if(config('adminlte.use_ico_only'))
            <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
        @elseif(config('adminlte.use_full_favicon'))
            <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
            <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
            <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
            <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
            <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
            <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
            <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
            <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
            <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
            <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
            <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
        @endif
    </head>
    <body id="app" class="@yield('classes_body')" @yield('body_data')>
        @yield('body')

        {{-- Footer Javascripts --}}
        @include('cookieConsent::index')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha256-fzFFyH01cBVPYzl16KT40wqjhgPtq6FFUB6ckN2+GGw=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js" integrity="sha256-O17BxFKtTt1tzzlkcYwgONw4K59H+r1iI8mSQXvSf5k=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.0/js/jquery.overlayScrollbars.min.js" integrity="sha256-in58qMrP2Kuuf1iNnwn39jsZN5gOzcjqM4kYeD9lYLk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" defer crossorigin="anonymous"></script>
        @include('adminlte::plugins', ['type' => 'js'])
        @yield('adminlte_js')
    </body>
</html>
