@extends('layouts.app')

@section('content')
    <main class="bg-gradient-to-r from-blue-400 via-teal-500 to-green-500 lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h1 class="text-4xl tracking-tight leading-10 font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                    Bienvenidos a mi
                    <br class="xl:hidden">
                    <span class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">blog</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-lg text-gray-200 sm:text-xl md:mt-5 md:max-w-3xl">
                    Me llamo <span class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">David Torralbo</span>, tengo {{ \Carbon\Carbon::parse('1997-10-30')->age }} años y soy Backend Developer en
                    <a href="https://www.gnahs.com" class="underline">GNA Hotel Solutions</a> desde 2017.
                </p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md">
                        <span class="inline-flex rounded-md shadow-sm">
                          <a href="{{ route('page', 'about-me') }}" aria-label="Sobre mi" type="button" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            Sobre mi
                              <svg viewBox="0 0 20 20" fill="currentColor" class="ml-3 -mr-1 h-5 w-5"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                          </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
            <img class="absolute inset-0 w-full h-full object-cover"
                 loading="lazy"
                 srcset="{{ ImageCacher::resize('david-torralbo-hero-section.jpg', 414, 256)->getOriginalName() }} 414w,
                         {{ ImageCacher::resize('david-torralbo-hero-section.jpg', 800, 384)->getOriginalName() }} 800w,
                         {{ ImageCacher::resize('david-torralbo-hero-section.jpg', 640, 678)->getOriginalName() }} 1280w"
                 src="{{ ImageCacher::resize('david-torralbo-hero-section.jpg', 640, 678)->getOriginalName() }}"
                 alt="David Torralbo">
        </div>
    </main>

    <livewire:posts :items="3" :pagination="false"/>

    <div class="relative bg-gradient-to-r from-green-400 via-teal-500 to-blue-500">
        <div class="h-56 bg-teal-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
            <img class="w-full h-full object-cover"
                 loading="lazy"
                 srcset="{{ ImageCacher::crop('estany-de-banyoles.jpg', 414, 224)->getOriginalName() }} 414w,
                         {{ ImageCacher::crop('estany-de-banyoles.jpg', 400, 498)->getOriginalName() }} 800w,
                         {{ ImageCacher::crop('estany-de-banyoles.jpg', 640, 406)->getOriginalName() }} 1280w"
                 src="{{ ImageCacher::crop('estany-de-banyoles.jpg', 1280, 406)->getOriginalName() }}"
                 alt="Estany de Banyoles">
        </div>
        <div class="relative max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <div class="md:ml-auto md:w-1/2 md:pl-10">
                <div class="text-base leading-6 font-semibold uppercase tracking-wider text-gray-200">
                    ¿Puedo ayudarte?
                </div>
                <h2 class="mt-2 text-white text-3xl leading-9 font-extrabold tracking-tight sm:text-4xl sm:leading-10">
                    Ponte en contacto conmigo
                </h2>
                <p class="mt-3 text-lg leading-7 text-gray-200">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a
                    scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum
                    tincidunt duis.
                </p>
                <div class="mt-8">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-gray-900 bg-white hover:text-gray-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Contactar
                            <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 ml-3 h-5 w-5"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
