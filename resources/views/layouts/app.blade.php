@extends('layouts.base')

@section('body')
    <div class="container mx-auto px-4">
        @include('partials.menu')
    </div>
        @yield('content')
        @include('partials.footer')
@endsection
