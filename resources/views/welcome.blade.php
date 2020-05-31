@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">

        <nav class="flex flex-wrap items-center justify-between p-4">
            <div class="lg:order-2 w-auto lg:w-1/5 lg:text-center"><a class="text-xl text-indigo-500 font-semibold" href="#">Dunder Mifflin</a></div>
            <div class="block lg:hidden">
                <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
                    <svg class="fill-current h-3 w-3" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                    </svg>
                </button>
            </div>
            <div class="navbar-menu hidden lg:order-1 lg:block w-full lg:w-2/5"><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Products</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Team</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="#">Customers</a></div>
            <div class="navbar-menu hidden lg:order-3 lg:block w-full lg:w-2/5 lg:text-right"><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Blog</a><a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">FAQ</a><a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="#">Contact</a></div>
        </nav>

        <section class="py-12 px-4 text-center">
            <div class="w-full max-w-2xl mx-auto">
                <span class="text-sm font-semibold">TAGLINE</span>
                <h2 class="text-5xl mt-2 mb-6 leading-tight font-heading">No paper plane can be made without paper</h2>
                <p class="mb-8 text-gray-500 leading-relaxed">Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That’s us - people who sell limitless paper in the paperless world.</p>
                <div><a class="inline-block py-4 px-8 mr-6 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Sign up</a><a class="text-blue-700 hover:underline" href="#">Learn more</a></div>
            </div>
        </section>

        <section class="py-12 px-4">
            <h2 class="text-3xl text-center mb-8 font-heading">Latest posts</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="h-full pb-8 rounded shadow-md">
                        <a href="#">
                            <img class="mb-4" src="placeholders/pictures/work.jpg" alt="">
                            <div class="px-6">
                                <small>22 Oct 2019 | By Michael Scott</small>
                                <h3 class="text-xl my-3 font-heading">Being world’s best boss</h3>
                                <p class="text-gray-500">The wise man once said: "Friend first, boss second, entertainer third". That man was me.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="h-full pb-8 rounded shadow-md">
                        <a href="#">
                            <img class="mb-4" src="placeholders/pictures/office.jpg" alt="">
                            <div class="px-6">
                                <small>22 Oct 2019 | By Dwight K. Schrute</small>
                                <h3 class="text-xl my-3 font-heading">Understanding the paper</h3>
                                <p class="text-gray-500">So you think you know everything about paper? False, you know nothing. Let me illuminate your first steps into my world.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="h-full pb-8 rounded shadow-md">
                        <a href="#">
                            <img class="mb-4" src="placeholders/pictures/work.jpg" alt="">
                            <div class="px-6">
                                <small>22 Oct 2019 | By Jim Halpert</small>
                                <h3 class="text-xl my-3 font-heading">Dwight doesn’t understand the paper</h3>
                                <p class="text-gray-500">Read it and finally find out that Dwight Schrute is merely a scammer.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 px-4">
            <h2 class="text-3xl mb-8 text-center font-heading">How to get Dunder Mifflined?</h2>
            <div class="flex max-w-sm mb-10 mx-auto text-center border-b-2">
                <div class="w-1/2 pb-2 border-b-4 border-indigo-500">
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
            <div><a class="inline-block py-4 px-8 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Learn more</a></div>
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

        <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="lg:w-4/6 px-4 mb-8 lg:mb-0 text-center lg:text-left">
                    <h2 class="text-xl font-heading">Are you a carte blanche of the paper industry? No worries, our team will help you in&nbsp;implementation process and dispel doubts.</h2>
                </div>
                <div class="w-full lg:w-2/6 px-4 text-center"><a class="inline-block py-4 px-8 mb-4 sm:mb-0 mr-6 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Sign up for free</a><a class="inline-block text-blue-700 hover:underline" href="#">Learn more</a></div>
            </div>
        </section>

        <footer class="p-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-auto lg:mr-auto text-center lg:text-left">&copy; 2019 Dunder Mifflin</div>
                <div class="flex justify-center items-center mt-4 lg:mt-0"><img class="w-6 h-6" src="placeholders/icons/message.svg" alt=""><img class="w-6 h-6 mx-6" src="placeholders/icons/share.svg" alt=""><img class="w-6 h-6" src="placeholders/icons/star.svg" alt=""></div>
            </div>
        </footer>
    </div>
@endsection
