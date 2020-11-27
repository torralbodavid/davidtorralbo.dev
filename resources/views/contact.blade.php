@extends('layouts.app')

@section('content')
    <div class="relative bg-white">
        <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="{{ ImageCacher::resize('pesquera-estany-de-banyoles.jpg', 1280, null)->getOriginalName() }}" alt="Pesquera Estany de Banyoles">
            </div>
        </div>
        <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
            <div class="lg:pr-8">
                <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
                    <h2 class="text-3xl leading-9 font-extrabold tracking-tight sm:text-4xl sm:leading-10">
                        May I help you?
                    </h2>
                    <p class="mt-4 text-lg leading-7 text-gray-500 sm:mt-3">
                        Get in touch with me!
                    </p>
                    <livewire:contact/>
                </div>
            </div>
        </div>
    </div>
@endsection
