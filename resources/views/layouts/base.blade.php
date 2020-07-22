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

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" media="print" onload="this.media='all'">
        @livewireStyles

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-body text-body font-body">
        @yield('body')

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" media="print" onload="this.media='all'">
        <script async defer src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
