@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        @include('partials.menu')

        <section class="py-12 px-4 text-center bg-gray-50 shadow-xl">
            <div class="w-full max-w-2xl mx-auto">
                <h2 class="text-5xl mt-2 mb-6 leading-tight font-heading">David Torralbo</h2>
                <p class="mb-8 mt-4 max-w-2xl text-xl leading-7 text-gray-900 lg:mx-auto">{{ config('me.birth')->age }} years old <strong>Backend developer</strong> from <a
                        class="text-red-500 hover:text-red-800 hover:underline" target="_blank" href="https://goo.gl/maps/YBesNtYySBKp14Ji8">Banyoles, Catalonia</a>.</p>
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        About me
                    </a>
                </div>
            </div>
        </section>

        <section class="py-12 px-4">
            <h2 class="text-3xl text-center mb-8 font-heading">Latest posts</h2>
            <div class="flex flex-wrap -mx-4">
                @include('partials.blog.section')
            </div>
        </section>

        <div class="bg-gray-50 shadow-xl">
            <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Ready to dive in?
                    <br />
                    <span class="text-red-600">Start your free trial today.</span>
                </h2>
                <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Get started
                        </a>
                    </div>
                    <div class="ml-3 inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-600 bg-white hover:text-red-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="p-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-auto lg:mr-auto text-center lg:text-left"><p>&copy; {{ date('Y') }} David Torralbo</p></div>
                <div class="flex justify-center items-center mt-4 lg:mt-0"><svg class="w-6 h-6" fill="red" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd"></path></svg><svg class="w-6 h-6 mx-6" fill="red" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><img class="w-6 h-6" src="placeholders/icons/star.svg" alt=""></div>
            </div>
        </footer>
    </div>
@endsection
