@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        @include('partials.menu')

        <section class="py-12 px-4 text-center bg-gray-50">
            <div class="w-full max-w-2xl mx-auto">
                <h2 class="text-5xl mt-2 mb-6 leading-tight font-heading">David Torralbo</h2>
                <p class="mb-8 mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">Backend developer from <a
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

        <section class="py-12 px-4 bg-gray-50">
            <h2 class="text-3xl mb-8 text-center font-heading">How to get Dunder Mifflined?</h2>
            <div class="flex max-w-sm mb-10 mx-auto text-center border-b-2">
                <div class="w-1/2 pb-2 border-b-4 border-red-500">
                    <button>For Customers</button>
                </div>
                <div class="w-1/2 pb-2">
                    <button>For Companies</button>
                </div>
            </div>
            <div class="flex flex-wrap -mx-8">
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img src="placeholders/icons/mobile.svg" alt="">
                    <h3 class="text-2xl mb-3 font-heading">Contact our Sales</h3>
                    <p class="text-gray-500 leading-relaxed">During the phone call we will be able to present you all details of cooperation, pricing and special offers, suited for your company.</p>
                </div>
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img src="placeholders/icons/pen.svg" alt="">
                    <h3 class="text-2xl mb-3 font-heading">Sign the documents</h3>
                    <p class="text-gray-500 leading-relaxed">We can also talk during business meeting, or visit your office anytime you want! Our employees will provide proper contracts.</p>
                </div>
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img src="placeholders/icons/van.svg" alt="">
                    <h3 class="text-2xl mb-3 font-heading">Wait for delivery!</h3>
                    <p class="text-gray-500 leading-relaxed">You don’t buy a pig... or shall I say a paper in a poke. The supplies will be delivered to your company every first Monday of the month.</p>
                </div>
            </div>
        </section>

        <section class="py-12 px-4 text-center">
            <h2 class="text-3xl mb-8 font-heading">How to get Dunder Mifflined?</h2>
            <div class="flex flex-wrap items-center justify-center -mx-8 mb-12">
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img class="mx-auto" src="placeholders/icons/mobile.svg" alt="">
                    <h3 class="text-2xl mt-6 mb-3 font-heading">Contact our Sales</h3>
                    <p class="text-gray-500 leading-relaxed">During the phone call we will be able to present you all details of cooperation, pricing and special offers, suited for your company.</p>
                </div>
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img class="mx-auto" src="placeholders/icons/pen.svg" alt="">
                    <h3 class="text-2xl mt-6 mb-3 font-heading">Sign the documents</h3>
                    <p class="text-gray-500 leading-relaxed">We can also talk during business meeting, or visit your office anytime you want! Our employees will provide proper contracts.</p>
                </div>
                <div class="lg:w-1/3 px-8 mb-8 lg:mb-0">
                    <img class="mx-auto" src="placeholders/icons/van.svg" alt="">
                    <h3 class="text-2xl mt-6 mb-3 font-heading">Wait for delivery!</h3>
                    <p class="text-gray-500 leading-relaxed">You don’t buy a pig... or shall I say a paper in a poke. The supplies will be delivered to your company every first Monday of the month.</p>
                </div>
            </div>
            <div><a class="inline-block py-4 px-8 leading-none text-white bg-red-500 hover:bg-red-600 rounded shadow" href="#">Learn more</a></div>
        </section>

        <section class="p-4">
            <div class="flex flex-wrap -mx-8">
                <div class="md:w-1/3 py-4 px-8 mb-4 md:mb-0">
                    <h3 class="text-2xl font-heading">Great quality</h3>
                    <p class="my-4 text-gray-500 leading-relaxed">Our paper is literally tempting you to print something. Even if you already have a paper supplier, we can change that!</p>
                    <a class="text-blue-700 hover:underline" href="#">Learn more &raquo;</a>
                </div>
                <div class="md:w-1/3 py-4 px-8 mb-4 md:mb-0">
                    <h3 class="text-2xl font-heading">Fast delivery</h3>
                    <p class="my-4 text-gray-500 leading-relaxed">Business in need? We can prepare next-day delivery if necessary. The supplies will be delivered to your company every first Monday.</p>
                    <a class="text-blue-700 hover:underline" href="#">Learn more &raquo;</a>
                </div>
                <div class="md:w-1/3 py-4 px-8 mb-4 md:mb-0">
                    <h3 class="text-2xl font-heading">Attractive discounts</h3>
                    <p class="my-4 text-gray-500 leading-relaxed">Every customer gets 10% discount on the other paper supplies. You never know, when we will launch something interesting.</p>
                    <a class="text-blue-700 hover:underline" href="#">Learn more &raquo;</a>
                </div>
            </div>
        </section>

        <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-4 -mb-6">
                <div class="lg:w-1/3 px-4 mb-6">
                    <img src="placeholders/icons/shield.svg" alt="">
                    <h3 class="text-xl my-2 font-heading">High durability</h3>
                    <p class="text-gray-500 leading-relaxed">Forget about paper jams with our increased stability product. Ideal for high-quality printing, colour printing and photocopying.</p>
                </div>
                <div class="lg:w-1/3 px-4 mb-6">
                    <img src="placeholders/icons/cloud-tools.svg" alt="">
                    <h3 class="text-xl my-2 font-heading">Versatility</h3>
                    <p class="text-gray-500 leading-relaxed">Multi-functional paper for various office needs. Snow-white sheets will shine bright like diamond for many years.</p>
                </div>
                <div class="lg:w-1/3 px-4 mb-6">
                    <img src="placeholders/icons/cart.svg" alt="">
                    <h3 class="text-xl my-2 font-heading">Value-based price</h3>
                    <p class="text-gray-500 leading-relaxed">The best combination of quality and economy comes with Dunder Mifflin paper. The offer includes paper in wide range of density and sizes.</p>
                </div>
            </div>
        </section>

        <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="placeholders/pictures/office.jpg" alt=""></div>
                <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="placeholders/pictures/work.jpg" alt=""></div>
            </div>
        </section>

        <div class="bg-gray-50">
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
                <div class="w-full lg:w-auto lg:mr-auto text-center lg:text-left">&copy; 2019 Dunder Mifflin</div>
                <div class="flex justify-center items-center mt-4 lg:mt-0"><img class="w-6 h-6" src="placeholders/icons/message.svg" alt=""><img class="w-6 h-6 mx-6" src="placeholders/icons/share.svg" alt=""><img class="w-6 h-6" src="placeholders/icons/star.svg" alt=""></div>
            </div>
        </footer>
    </div>
@endsection
