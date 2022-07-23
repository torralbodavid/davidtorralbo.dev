<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <livewire:styles/>
    <livewire:scripts/>
    <script src="https://tailwindui.com/v2-assets/components.js?id=04b6e66ea653b6e4103cba0bd678003d"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div class="" style="">
    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
        <x-header/>
        {{ $slot }}
        <x-footer/>
    </div>
</div>
</body>
</html>