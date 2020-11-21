@extends('layouts.app')

@section('title', 'Programador')

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
                          <a href="{{ route('page', 'acerca-de') }}" aria-label="Sobre mi" type="button" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
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
                 srcset="{{ ImageCacher::crop('david-torralbo-hero-section.jpg', 414, 256)->getOriginalName() }} 414w,
                         {{ ImageCacher::crop('david-torralbo-hero-section.jpg', 800, 384)->getOriginalName() }} 800w,
                         {{ ImageCacher::crop('david-torralbo-hero-section.jpg', 640, 678)->getOriginalName() }} 1280w"
                 src="{{ ImageCacher::crop('david-torralbo-hero-section.jpg', 640, 678)->getOriginalName() }}"
                 alt="David Torralbo">
        </div>
    </main>

    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl leading-9 font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500 sm:text-4xl sm:leading-10">
                    Trusted by developers from over 80 planets
                </h2>
                <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.
                </p>
            </div>
        </div>
        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500" id="item-1">
                                    años de experiencia
                                </dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600" aria-describedby="item-1">
                                    >3
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                    estrellas en repositorios open-source
                                </dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600">
                                    >30
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                    Entrega
                                </dt>
                                <dd class="order-1 text-5xl leading-none font-extrabold text-indigo-600">
                                    100%
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:posts :items="3" :pagination="false"/>

    <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
        <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
                <title id="svg-workcation">Workcation</title>
                <defs>
                    <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
            </svg>

            <div class="relative">
                <svg class="mx-auto h-10" fill="none" viewBox="0 0 180 40">
                    <path fill="#2D3748" d="M59.267 32.642h3.718L66.087 21.7l3.126 10.94h3.718l4.642-16.576h-3.434l-3.173 12.29-3.481-12.29H64.69l-3.457 12.29-3.174-12.29h-3.433l4.641 16.576zM83.551 32.973c3.481 0 6.276-2.723 6.276-6.252 0-3.528-2.794-6.252-6.276-6.252-3.48 0-6.252 2.724-6.252 6.252 0 3.529 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.398-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.22 3.268zM95.031 22.837v-2.036h-3.055v11.84h3.055v-5.66c0-2.486 2.013-3.196 3.6-3.007v-3.41c-1.492 0-2.984.663-3.6 2.273zM111.334 32.642l-4.902-5.992 4.76-5.85h-3.647l-4.073 5.21v-9.946h-3.055v16.578h3.055v-5.376l4.31 5.376h3.552z" />
                    <path fill="#5850EC" fill-rule="evenodd" d="M42.342 17.45l-7.596-4.385v20.371h8.88v1.974H.21v-1.974h3.947v-12.55l-3.678.92L0 19.89l20.81-5.202h3.08a9.421 9.421 0 00-.67 2.525l-.477 3.922 5.096-2.942v15.243h4.933v-20.37l-7.594 4.385a7.402 7.402 0 012.531-4.736h-4.064a7.39 7.39 0 016.557-2.933l-5.517-3.186a7.388 7.388 0 016.607.397 7.366 7.366 0 012.468 2.316 7.363 7.363 0 012.467-2.316 7.39 7.39 0 016.608-.397l-5.518 3.186a7.389 7.389 0 016.558 2.933h-4.066a7.399 7.399 0 012.533 4.735zm-18.45 6.119h-5.92v9.867h5.92v-9.867zm-10.854 1.973a1.974 1.974 0 11-3.947 0 1.974 1.974 0 013.947 0z" clip-rule="evenodd" />
                    <path fill="#5850EC" d="M118.495 32.973c2.321 0 4.334-1.232 5.352-3.079l-2.652-1.515c-.474.97-1.492 1.563-2.723 1.563-1.824 0-3.174-1.35-3.174-3.221 0-1.895 1.35-3.244 3.174-3.244 1.207 0 2.226.615 2.699 1.586l2.629-1.54c-.971-1.823-2.984-3.054-5.305-3.054-3.599 0-6.252 2.723-6.252 6.252 0 3.528 2.653 6.252 6.252 6.252zM134.277 20.8v1.398c-.853-1.066-2.131-1.729-3.86-1.729-3.15 0-5.755 2.723-5.755 6.252 0 3.528 2.605 6.252 5.755 6.252 1.729 0 3.007-.663 3.86-1.729v1.397h3.055v-11.84h-3.055zm-3.292 9.26c-1.871 0-3.268-1.35-3.268-3.34 0-1.988 1.397-3.338 3.268-3.338 1.895 0 3.292 1.35 3.292 3.339 0 1.99-1.397 3.339-3.292 3.339zM146.875 23.737v-2.936h-2.676v-3.316l-3.055.924V20.8h-2.06v2.936h2.06v4.926c0 3.197 1.445 4.452 5.731 3.978v-2.77c-1.752.094-2.676.07-2.676-1.208v-4.926h2.676zM150.544 19.38c1.042 0 1.895-.853 1.895-1.871s-.853-1.895-1.895-1.895c-1.018 0-1.87.877-1.87 1.895a1.89 1.89 0 001.87 1.87zm-1.515 13.261h3.055v-11.84h-3.055v11.84zM160.516 32.973c3.481 0 6.276-2.724 6.276-6.252 0-3.529-2.795-6.252-6.276-6.252s-6.252 2.723-6.252 6.252c0 3.528 2.771 6.252 6.252 6.252zm0-2.984c-1.8 0-3.197-1.35-3.197-3.268 0-1.918 1.397-3.268 3.197-3.268 1.824 0 3.221 1.35 3.221 3.268 0 1.918-1.397 3.268-3.221 3.268zM175.524 20.469c-1.586 0-2.818.592-3.528 1.658V20.8h-3.055v11.84h3.055v-6.394c0-2.06 1.113-2.936 2.605-2.936 1.373 0 2.344.829 2.344 2.439v6.891H180v-7.27c0-3.15-1.966-4.902-4.476-4.902z" />
                </svg>
                <blockquote class="mt-8">
                    <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                        <p>
                            &ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.&rdquo;
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                            <div class="md:flex-shrink-0">
                                <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                <div class="text-base leading-6 font-medium text-gray-900">Judith Black</div>

                                <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 0h3L9 20H6l5-20z" />
                                </svg>

                                <div class="text-base leading-6 font-medium text-gray-500">CEO, Workcation</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>


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
