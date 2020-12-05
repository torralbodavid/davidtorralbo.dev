<div class="relative bg-white">
    <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                 src="{{ ImageCacher::resize('pesquera-estany-de-banyoles.jpg', 1280, null)->getOriginalName() }}"
                 alt="Pesquera Estany de Banyoles">
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
                @if($errors->isNotEmpty())
                    <p class="mt-9">
                        <x-app-alert message="{{ $errors->first() }}"/>
                    </p>
                @endif
                <form wire:submit.prevent="submit" class="mt-9 grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                    @csrf
                    @honeypot
                    <div>
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input autofocus id="name" wire:model.lazy="name"
                                   class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div>
                        <label for="surname" class="block text-sm font-medium leading-5 text-gray-700">Surnames</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="surname" wire:model="surname"
                                   class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Mail</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" type="email" wire:model="email"
                                   class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex justify-between">
                            <label for="how_can_we_help" class="block text-sm font-medium leading-5 text-gray-700">How
                                can I help you?</label>
                            <span class="text-sm leading-5 text-gray-500">Max. 500 characters</span>
                        </div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea id="how_can_we_help" wire:model="text" maxlength="500" rows="8"
                                      class="resize-none form-textarea block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"></textarea>
                        </div>
                    </div>
                    <div class="text-right sm:col-span-2">
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit"
                      class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Contact
              </button>
            </span>
                    </div>
                </form>

                @if (session()->has('title') || session()->has('description'))
                    <x-app-notification :title="session('title')" :description="session('description')"/>
                @endif
            </div>
        </div>
    </div>
</div>
