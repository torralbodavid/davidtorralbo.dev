<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        @hasSection('description')
            <meta name="description" content="@yield('description')">
        @endif

        @yield('cards')

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="canonical" href="{{ Request::url() }}" />

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>
    </head>

    <body class="bg-body text-body font-body">
        @yield('body')

        <script async defer src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" media="print" onload="this.media='all'">
    </body>
</html>
