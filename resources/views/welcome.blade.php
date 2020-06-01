@extends('layouts.app')

@section('content')
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
                <livewire:blog.section />
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
@endsection
