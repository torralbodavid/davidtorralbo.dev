<div>
    <div x-show="open" class="relative z-40 lg:hidden"
         x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
         aria-modal="true" style="display: none;">

        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
             class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>


        <div class="fixed inset-0 flex z-40">

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                 x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                 class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto"
                 @click.away="open = false" style="display: none;">
                <div class="px-4 pt-5 pb-2 flex">
                    <button type="button"
                            class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                            @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                    </div>

                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Audit your website</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Contact</a>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <!-- Currency selector -->
                    <form>
                        <div class="inline-block">
                            <label for="mobile-currency" class="sr-only">Currency</label>
                            <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                <select id="mobile-currency" name="currency"
                                        class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">

                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>

                                </select>
                                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                                        <path stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M6 8l4 4 4-4"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <header class="relative z-10">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                    <div class="hidden lg:block lg:flex-1"></div>

                    <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">
                        Get free delivery on orders over $100
                    </p>

                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Audit your website</a>
                        <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Contact</a>
                    </div>
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="bg-white">
                <div class="border-b border-gray-200">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="h-16 flex items-center justify-between">
                            <!-- Logo (lg+) -->
                            <div class="hidden lg:flex lg:items-center">
                                <a href="#">
                                    <span class="sr-only">Workflow</span>
                                    <img class="h-8 w-auto"
                                         src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600"
                                         alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Mega menus -->
                                <div class="ml-8" x-data="Components.popoverGroup()" x-init="init()">
                                    <div class="h-full flex justify-center space-x-8">

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Blog</a>

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Talks</a>

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">About me</a>

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Uses</a>

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contact</a>

                                        <a href="#"
                                           class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">
                                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                <svg class="-ml-1 mr-1.5 h-3.5 w-3.5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                                                Audit your website</span>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <!-- Mobile menu and search (lg-) -->
                            <div class="flex-1 flex items-center lg:hidden">
                                <button type="button"
                                        x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state."
                                        class="-ml-2 bg-white p-2 rounded-md text-gray-400"
                                        @click="open = true">
                                    <span class="sr-only">Open menu</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </button>

                                <!-- Search -->
                                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="w-6 h-6" x-description="Heroicon name: outline/search"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Workflow</span>
                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600"
                                     alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex-1 flex items-center justify-end">
                                <div class="flex items-center lg:ml-8">
                                    <div class="flex space-x-8">
                                        <div class="hidden lg:flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Search</span>
                                                <svg class="w-6 h-6"
                                                     x-description="Heroicon name: outline/search"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                     aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Account</span>
                                                <svg class="w-6 h-6" x-description="Heroicon name: outline/user"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                     aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                                    <div class="flow-root">
                                        <a href="#" class="group -m-2 p-2 flex items-center">
                                            <span class="fi fi-es-ct w-5 h-auto block flex-shrink-0"></span>
                                            <span class="ml-3 block text-sm font-medium">CA</span>
                                            <span class="sr-only">, change currency</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>