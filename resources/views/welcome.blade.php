<x-layouts.app>
    <div class="" style="">

        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
            <!-- Mobile menu -->

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

                        <!-- Links -->
                        <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick"
                             @tab-keydown.window="onTabKeydown">
                            <div class="border-b border-gray-200">
                                <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">

                                    <button id="tabs-1-tab-1"
                                            class="flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium text-indigo-600 border-indigo-600"
                                            x-state:on="Selected" x-state:off="Not Selected"
                                            :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }"
                                            x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab"
                                            x-init="init()" @click="onClick" @keydown="onKeydown"
                                            @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                            :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="0"
                                            aria-selected="true">
                                        Women
                                    </button>

                                    <button id="tabs-1-tab-2"
                                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                                            x-state:on="Selected" x-state:off="Not Selected"
                                            :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }"
                                            x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab"
                                            x-init="init()" @click="onClick" @keydown="onKeydown"
                                            @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                            :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="-1"
                                            aria-selected="false">
                                        Men
                                    </button>

                                </div>
                            </div>


                            <div id="tabs-1-panel-1" class="px-4 pt-10 pb-6 space-y-12"
                                 x-description="'Women' tab panel, show/hide based on tab state."
                                 x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()"
                                 x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                                <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                        <div>
                                            <p id="mobile-featured-heading-0" class="font-medium text-gray-900">
                                                Featured
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-featured-heading-0"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Sleep
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Swimwear
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Underwear
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                                Categories
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-categories-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Basic Tees
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Artwork Tees
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Bottoms
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Underwear
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Accessories
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                        <div>
                                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                                Collection
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-collection-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Everything
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Core
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        New Arrivals
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Sale
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div>
                                            <p id="mobile-brand-heading" class="font-medium text-gray-900">
                                                Brands
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-brand-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Full Nelson
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        My Way
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Re-Arranged
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Counterfeit
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Significant Other
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tabs-1-panel-2" class="px-4 pt-10 pb-6 space-y-12"
                                 x-description="'Men' tab panel, show/hide based on tab state."
                                 x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()"
                                 x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0"
                                 style="display: none;">
                                <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                        <div>
                                            <p id="mobile-featured-heading-1" class="font-medium text-gray-900">
                                                Featured
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-featured-heading-1"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Casual
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Boxers
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Outdoor
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                                Categories
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-categories-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Artwork Tees
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Pants
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Accessories
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Boxers
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Basic Tees
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                        <div>
                                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                                Collection
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-collection-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Everything
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Core
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        New Arrivals
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Sale
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div>
                                            <p id="mobile-brand-heading" class="font-medium text-gray-900">
                                                Brands
                                            </p>
                                            <ul role="list" aria-labelledby="mobile-brand-heading"
                                                class="mt-6 space-y-6">

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Significant Other
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        My Way
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Counterfeit
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Re-Arranged
                                                    </a>
                                                </li>

                                                <li class="flex">
                                                    <a href="#" class="text-gray-500">
                                                        Full Nelson
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 space-y-6">

                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                            </div>

                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                            </div>

                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
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
                            <!-- Currency selector -->
                            <form class="hidden lg:block lg:flex-1">
                                <div class="flex">
                                    <label for="desktop-currency" class="sr-only">Currency</label>
                                    <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                        <select id="desktop-currency" name="currency"
                                                class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">

                                            <option>CAD</option>

                                            <option>USD</option>

                                            <option>AUD</option>

                                            <option>EUR</option>

                                            <option>GBP</option>

                                        </select>
                                        <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="1.5"
                                                      d="M6 8l4 4 4-4"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">
                                Get free delivery on orders over $100
                            </p>

                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an
                                    account</a>
                                <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
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

                                                <div class="flex"
                                                     x-data="Components.popover({ open: false, focus: false })"
                                                     x-init="init()" @keydown.escape="onEscape"
                                                     @close-popover-group.window="onClosePopoverGroup">
                                                    <div class="relative flex">
                                                        <button type="button" x-state:on="Item active"
                                                                x-state:off="Item inactive"
                                                                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                                                :class="{ 'border-indigo-600 text-indigo-600': open, 'border-transparent text-gray-700 hover:text-gray-800': !(open) }"
                                                                @click="toggle"
                                                                @mousedown="if (open) $event.preventDefault()"
                                                                aria-expanded="false" :aria-expanded="open.toString()">
                                                            Women
                                                        </button>
                                                    </div>


                                                    <div x-show="open"
                                                         x-transition:enter="transition ease-out duration-200"
                                                         x-transition:enter-start="opacity-0"
                                                         x-transition:enter-end="opacity-100"
                                                         x-transition:leave="transition ease-in duration-150"
                                                         x-transition:leave-start="opacity-100"
                                                         x-transition:leave-end="opacity-0"
                                                         x-description="'Women' mega menu, show/hide based on flyout menu state."
                                                         class="absolute top-full inset-x-0 text-gray-500 sm:text-sm"
                                                         x-ref="panel" @click.away="open = false"
                                                         style="display: none;">
                                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                        <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                             aria-hidden="true"></div>

                                                        <div class="relative bg-white">
                                                            <div class="max-w-7xl mx-auto px-8">
                                                                <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                        <div>
                                                                            <p id="desktop-featured-heading-0"
                                                                               class="font-medium text-gray-900">
                                                                                Featured
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-featured-heading-0"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Sleep
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Swimwear
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Underwear
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <p id="desktop-categories-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Categories
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-categories-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Basic Tees
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Artwork Tees
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Bottoms
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Underwear
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                        <div>
                                                                            <p id="desktop-collection-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Collection
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-collection-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Everything
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Core
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        New Arrivals
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Sale
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div>
                                                                            <p id="desktop-brand-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Brands
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-brand-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Full Nelson
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        My Way
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Re-Arranged
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Counterfeit
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Significant Other
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="flex"
                                                     x-data="Components.popover({ open: false, focus: false })"
                                                     x-init="init()" @keydown.escape="onEscape"
                                                     @close-popover-group.window="onClosePopoverGroup">
                                                    <div class="relative flex">
                                                        <button type="button" x-state:on="Item active"
                                                                x-state:off="Item inactive"
                                                                class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                                                :class="{ 'border-indigo-600 text-indigo-600': open, 'border-transparent text-gray-700 hover:text-gray-800': !(open) }"
                                                                @click="toggle"
                                                                @mousedown="if (open) $event.preventDefault()"
                                                                aria-expanded="false" :aria-expanded="open.toString()">
                                                            Men
                                                        </button>
                                                    </div>


                                                    <div x-show="open"
                                                         x-transition:enter="transition ease-out duration-200"
                                                         x-transition:enter-start="opacity-0"
                                                         x-transition:enter-end="opacity-100"
                                                         x-transition:leave="transition ease-in duration-150"
                                                         x-transition:leave-start="opacity-100"
                                                         x-transition:leave-end="opacity-0"
                                                         x-description="'Men' mega menu, show/hide based on flyout menu state."
                                                         class="absolute top-full inset-x-0 text-gray-500 sm:text-sm"
                                                         x-ref="panel" @click.away="open = false"
                                                         style="display: none;">
                                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                        <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                             aria-hidden="true"></div>

                                                        <div class="relative bg-white">
                                                            <div class="max-w-7xl mx-auto px-8">
                                                                <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                        <div>
                                                                            <p id="desktop-featured-heading-1"
                                                                               class="font-medium text-gray-900">
                                                                                Featured
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-featured-heading-1"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Casual
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Boxers
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Outdoor
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <p id="desktop-categories-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Categories
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-categories-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Artwork Tees
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Pants
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Accessories
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Boxers
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Basic Tees
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                        <div>
                                                                            <p id="desktop-collection-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Collection
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-collection-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Everything
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Core
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        New Arrivals
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Sale
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div>
                                                                            <p id="desktop-brand-heading"
                                                                               class="font-medium text-gray-900">
                                                                                Brands
                                                                            </p>
                                                                            <ul role="list"
                                                                                aria-labelledby="desktop-brand-heading"
                                                                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Significant Other
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        My Way
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Counterfeit
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Re-Arranged
                                                                                    </a>
                                                                                </li>

                                                                                <li class="flex">
                                                                                    <a href="#"
                                                                                       class="hover:text-gray-800">
                                                                                        Full Nelson
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <a href="#"
                                                   class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                                                <a href="#"
                                                   class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>

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

            <main>
                <!-- Hero -->
                <div class="flex flex-col border-b border-gray-200 lg:border-0">
                    <nav aria-label="Offers" class="order-last lg:order-first">
                        <div class="max-w-7xl mx-auto lg:px-8">
                            <ul role="list"
                                class="grid grid-cols-1 divide-y divide-gray-200 lg:grid-cols-3 lg:divide-y-0 lg:divide-x">

                                <li class="flex flex-col">
                                    <a href="#"
                                       class="relative flex-1 flex flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                        <p class="text-sm text-gray-500">
                                            Download the app
                                        </p>
                                        <p class="font-semibold text-gray-900">
                                            Get an exclusive $5 off code
                                        </p>
                                    </a>
                                </li>

                                <li class="flex flex-col">
                                    <a href="#"
                                       class="relative flex-1 flex flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                        <p class="text-sm text-gray-500">
                                            Return when you're ready
                                        </p>
                                        <p class="font-semibold text-gray-900">
                                            60 days of free returns
                                        </p>
                                    </a>
                                </li>

                                <li class="flex flex-col">
                                    <a href="#"
                                       class="relative flex-1 flex flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                        <p class="text-sm text-gray-500">
                                            Sign up for our newsletter
                                        </p>
                                        <p class="font-semibold text-gray-900">
                                            15% off your first order
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>

                    <div class="bg-white pb-8 sm:pb-12 lg:pb-12">
                        <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                                <div>
                                    <div>
                                        <a href="#" class="inline-flex space-x-4">
                                            <span class="rounded bg-indigo-50 px-2.5 py-1 text-xs font-semibold text-indigo-600 tracking-wide uppercase">¿Qué hay de nuevo?</span>
                                            <span class="inline-flex items-center text-sm font-medium text-indigo-600 space-x-1">
                <span>¡Nueva versión de la web!</span>
                                                <!-- Heroicon name: solid/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                  <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"/>
                </svg>
              </span>
                                        </a>
                                    </div>
                                    <div class="mt-6 sm:max-w-xl">
                                        <h1 class="text-6xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                                            Welcome to my blog 🥳</h1>
                                        <p class="mt-6 text-xl text-gray-500"> My name is David Torralbo, I'm a 24 years
                                            old Backend Developer from Banyoles, Girona. I work at GNA Hotel Solutions
                                            since 2017. <br><br>I am an open source contributor with currently 32
                                            repositories at GitHub.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="#"
                                           class="inline-block bg-indigo-600 border border-transparent py-3 px-8 rounded-md font-bold text-white hover:bg-indigo-700">Shop
                                            Productivity</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                                <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                                    <div class="hidden sm:block">
                                        <div class="absolute inset-y-0 left-1/2 w-screen bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"></div>
                                        <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404"
                                             height="392" fill="none" viewBox="0 0 404 392">
                                            <defs>
                                                <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0"
                                                         width="20" height="20" patternUnits="userSpaceOnUse">
                                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                                          fill="currentColor"/>
                                                </pattern>
                                            </defs>
                                            <rect width="404" height="392"
                                                  fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)"/>
                                        </svg>
                                    </div>
                                    <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                                        <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none"
                                             src="https://tailwindui.com/img/component-images/top-nav-with-multi-column-layout-screenshot.jpg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collections -->
                <div class="bg-white pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
                    <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                        <div>
                            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                                Press
                            </h2>
                            <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                                <p class="text-xl text-gray-500">
                                    Get weekly articles in your inbox on how to grow your business.
                                </p>
                                <form class="mt-6 flex flex-col sm:flex-row lg:mt-0 lg:justify-end">
                                    <div>
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input id="email-address" name="email-address" type="email" autocomplete="email"
                                               required=""
                                               class="appearance-none w-full px-4 py-2 border border-gray-300 text-base rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 lg:max-w-xs"
                                               placeholder="Enter your email">
                                    </div>
                                    <div class="mt-2 flex-shrink-0 w-full flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto sm:inline-flex">
                                        <button type="button"
                                                class="w-full bg-indigo-600 px-4 py-2 border border-transparent rounded-md flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto sm:inline-flex">
                                            Notify me
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                            <div>
                                <div>
                                    <a href="#" class="inline-block">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800"> Article </span>
                                    </a>
                                </div>
                                <a href="#" class="block mt-4">
                                    <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                    <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum.
                                        Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                                </a>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#">
                                            <span class="sr-only">Paul York</span>
                                            <img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            <a href="#"> Paul York </a>
                                        </p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-16"> Mar 16, 2020</time>
                                            <span aria-hidden="true"> &middot; </span>
                                            <span> 6 min read </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <a href="#" class="inline-block">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                                    </a>
                                </div>
                                <a href="#" class="block mt-4">
                                    <p class="text-xl font-semibold text-gray-900">How to use search engine optimization
                                        to drive sales</p>
                                    <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum.
                                        Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                                </a>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#">
                                            <span class="sr-only">Dessie Ryan</span>
                                            <img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            <a href="#"> Dessie Ryan </a>
                                        </p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-10"> Mar 10, 2020</time>
                                            <span aria-hidden="true"> &middot; </span>
                                            <span> 4 min read </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <a href="#" class="inline-block">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800"> Case Study </span>
                                    </a>
                                </div>
                                <a href="#" class="block mt-4">
                                    <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Ab iure iusto fugiat commodi sequi.</p>
                                </a>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#">
                                            <span class="sr-only">Easer Collins</span>
                                            <img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            <a href="#"> Easer Collins </a>
                                        </p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-02-12"> Feb 12, 2020</time>
                                            <span aria-hidden="true"> &middot; </span>
                                            <span> 11 min read </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trending products -->
                <div class="relative bg-white">
                    <div class="h-56 bg-indigo-600 sm:h-72 lg:absolute lg:left-0 lg:h-full lg:w-1/2">
                        <img class="w-full h-full object-cover"
                             src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                             alt="Support team">
                    </div>
                    <div class="relative max-w-7xl mx-auto px-4 py-8 sm:py-12 sm:px-6 lg:py-16">
                        <div class="max-w-2xl mx-auto lg:max-w-none lg:mr-0 lg:ml-auto lg:w-1/2 lg:pl-10">
                            <div>
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/users -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="mt-6 text-3xl font-extrabold text-gray-900 sm:text-4xl">Deliver what your
                                customers want every time</h2>
                            <p class="mt-6 text-lg text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Dolore nihil ea rerum ipsa. Nostrum consectetur sequi culpa doloribus omnis,
                                molestiae esse placeat, exercitationem magnam quod molestias quia aspernatur deserunt
                                voluptatibus.</p>
                            <div class="mt-8 overflow-hidden">
                                <dl class="-mx-8 -mt-8 flex flex-wrap">
                                    <div class="flex flex-col px-8 pt-8">
                                        <dt class="order-2 text-base font-medium text-gray-500">Delivery</dt>
                                        <dd class="order-1 text-2xl font-extrabold text-indigo-600 sm:text-3xl">24/7
                                        </dd>
                                    </div>
                                    <div class="flex flex-col px-8 pt-8">
                                        <dt class="order-2 text-base font-medium text-gray-500">Pepperoni</dt>
                                        <dd class="order-1 text-2xl font-extrabold text-indigo-600 sm:text-3xl">99.9%
                                        </dd>
                                    </div>
                                    <div class="flex flex-col px-8 pt-8">
                                        <dt class="order-2 text-base font-medium text-gray-500">Calories</dt>
                                        <dd class="order-1 text-2xl font-extrabold text-indigo-600 sm:text-3xl">100k+
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sale and testimonials -->
                <div class="relative overflow-hidden">
                    <!-- Decorative background image and gradient -->
                    <div aria-hidden="true" class="absolute inset-0">
                        <div class="absolute inset-0 max-w-7xl mx-auto overflow-hidden xl:px-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg"
                                 alt="" class="w-full h-full object-center object-cover">
                        </div>
                        <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                    </div>

                    <!-- Sale -->
                    <section aria-labelledby="sale-heading"
                             class="relative max-w-7xl mx-auto pt-32 px-4 flex flex-col items-center text-center sm:px-6 lg:px-8">
                        <div class="max-w-2xl mx-auto lg:max-w-none">
                            <h2 id="sale-heading"
                                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                                Get 25% off during our one-time sale
                            </h2>
                            <p class="mt-4 max-w-xl mx-auto text-xl text-gray-600">Most of our products are limited
                                releases that won't come back. Get your favorite items while they're in stock.</p>
                            <a href="#"
                               class="mt-6 inline-block w-full bg-gray-900 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">Get
                                access to our one-time sale</a>
                        </div>
                    </section>

                    <!-- Testimonials -->
                    <section aria-labelledby="testimonial-heading"
                             class="relative py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:py-32 lg:px-8">
                        <div class="max-w-2xl mx-auto lg:max-w-none">
                            <h2 id="testimonial-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">
                                What are people saying?</h2>

                            <div class="mt-16 space-y-16 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">

                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                         aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                        <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                        <p class="text-lg text-gray-600">
                                            My order arrived super quickly. The product is even better than I hoped it
                                            would be. Very happy customer over here!
                                        </p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                            Sarah Peters, New Orleans
                                        </cite>
                                    </div>
                                </blockquote>

                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                         aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                        <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                        <p class="text-lg text-gray-600">
                                            I had to return a purchase that didn’t fit. The whole process was so simple
                                            that I ended up ordering two new items!
                                        </p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                            Kelly McPherson, Chicago
                                        </cite>
                                    </div>
                                </blockquote>

                                <blockquote class="sm:flex lg:block">
                                    <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                         aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                        <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                        <p class="text-lg text-gray-600">
                                            Now that I’m on holiday for the summer, I’ll probably order a few more
                                            shirts. It’s just so convenient, and I know the quality will always be
                                            there.
                                        </p>
                                        <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                            Chris Paul, Phoenix
                                        </cite>
                                    </div>
                                </blockquote>

                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <footer aria-labelledby="footer-heading" class="bg-white">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="border-t border-gray-200">
                        <div class="pt-16 pb-20">
                            <div class="md:flex md:justify-center">
                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600"
                                     alt="" class="h-8 w-auto">
                            </div>
                            <div class="mt-16 max-w-5xl mx-auto xl:grid xl:grid-cols-2 xl:gap-8">
                                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                                    <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                Products
                                            </h3>
                                            <ul role="list" class="mt-6 space-y-6">

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Bags
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Tees
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Objects
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Home Goods
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Accessories
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                Customer Service
                                            </h3>
                                            <ul role="list" class="mt-6 space-y-6">

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Contact
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Shipping
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Returns
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Warranty
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Secure Payments
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        FAQ
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Find a store
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="space-y-12 md:space-y-0 md:grid md:grid-cols-2 md:gap-8">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                Company
                                            </h3>
                                            <ul role="list" class="mt-6 space-y-6">

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Who we are
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Sustainability
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Press
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Careers
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Terms &amp; Conditions
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Privacy
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                Legal
                                            </h3>
                                            <ul role="list" class="mt-6 space-y-6">

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Terms of Service
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Return Policy
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Privacy Policy
                                                    </a>
                                                </li>

                                                <li class="text-sm">
                                                    <a href="#" class="text-gray-500 hover:text-gray-600">
                                                        Shipping Policy
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:grid lg:grid-cols-2 lg:gap-x-6 xl:gap-x-8">
                            <div class="bg-gray-100 rounded-lg p-6 flex items-center sm:p-10">
                                <div class="max-w-sm mx-auto">
                                    <h3 class="font-semibold text-gray-900">Sign up for our newsletter</h3>
                                    <p class="mt-2 text-sm text-gray-500">The latest news, articles, and resources, sent
                                        to your inbox weekly.</p>
                                    <form class="mt-4 sm:mt-6 sm:flex">
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input id="email-address" type="text" autocomplete="email" required=""
                                               class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                        <div class="mt-3 sm:flex-shrink-0 sm:mt-0 sm:ml-4">
                                            <button type="submit"
                                                    class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-indigo-500">
                                                Sign up
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="mt-6 relative py-12 px-6 flex items-center sm:py-16 sm:px-10 lg:mt-0">
                                <div class="absolute inset-0 rounded-lg overflow-hidden">
                                    <img src="https://tailwindui.com/img/ecommerce-images/footer-02-exclusive-sale.jpg"
                                         alt="" class="w-full h-full filter saturate-0 object-center object-cover">
                                    <div class="absolute inset-0 bg-indigo-600 bg-opacity-90"></div>
                                </div>
                                <div class="relative max-w-sm mx-auto text-center">
                                    <h3 class="text-2xl font-extrabold tracking-tight text-white">Get early access</h3>
                                    <p class="mt-2 text-gray-200">
                                        Did you sign up to the newsletter? If so, use the keyword we sent you to get
                                        access. <a href="#"
                                                   class="font-bold text-white whitespace-nowrap hover:text-gray-200">Go
                                            now<span aria-hidden="true"> →</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-10 md:flex md:items-center md:justify-between">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">© 2021 All Rights Reserved</p>
                        </div>

                        <div class="mt-4 flex items-center justify-center md:mt-0">
                            <div class="flex space-x-8">

                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">
                                    Accessibility
                                </a>

                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">
                                    Privacy
                                </a>

                                <a href="#" class="text-sm text-gray-500 hover:text-gray-600">
                                    Terms
                                </a>

                            </div>

                            <div class="ml-6 border-l border-gray-200 pl-6">
                                <a href="#" class="flex items-center text-gray-500 hover:text-gray-600">
                                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                         class="w-5 h-auto flex-shrink-0">
                                    <span class="ml-3 text-sm">
                  Change
                </span>
                                    <span class="sr-only">location and currency</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</x-layouts.app>