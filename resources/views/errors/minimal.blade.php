@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-indigo-50 via-blue to-white">
        <div class="max-w-screen-xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-base leading-6 font-semibold text-indigo-600 tracking-wide uppercase">¡Pues vaya!</h1>
                <p class="mt-1 text-4xl leading-10 font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-indigo-600 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                    Error @yield('code')</p>
                <p class="max-w-xl mt-5 mx-auto text-xl leading-7 text-gray-500">@yield('message')</p>
            </div>
            <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
                <div class="px-6 py-6 bg-gradient-to-r from-indigo-500 to-blue-400 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                    <div class="xl:w-0 xl:flex-1">
                        <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
                            ¿Te puedo recomendar alguna entrada de mi blog?
                        </h2>
                        <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200" id="newsletter-headline">
                            Puedes acceder a ellas pinchando en el siguiente botón.
                        </p>
                    </div>
                    <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('posts') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                Echa un vistazo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
