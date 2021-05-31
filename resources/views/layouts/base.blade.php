<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        @hasSection('description')
            <meta name="description" content="@yield('description')">
        @endif

        @yield('cards')

        <link rel="stylesheet" href="{{ mix('css/index_critical.min.css') }}">
        <link rel="preload" href="{{ mix('css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ mix('css/app.css') }}"></noscript>
        
        @livewireStyles

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="canonical" href="{{ Request::url() }}" />

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>
    </head>

    <body class="bg-body text-body font-body">
        @yield('body')

        @if(Request::route()->getName() !== 'home')
            @livewireScripts
        @endif
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(e) {
                var script = document.createElement('script');
                script.setAttribute('src', 'https://www.googletagmanager.com/gtag/js?id=G-L23C2SCP7M');
                script.setAttribute('type', 'text/javascript');
                document.getElementsByTagName('head')[0].appendChild(script);

                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('js', new Date());

                gtag('config', 'G-L23C2SCP7M', {cookie_flags: 'SameSite=None;Secure'});
            });
        </script>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" media="print" onload="this.media='all'">
    </body>
</html>
