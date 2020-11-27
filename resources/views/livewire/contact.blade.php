<form wire:submit.prevent="submit" class="mt-9 grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
    @csrf
    @honeypot
    <div>
        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="name" wire:model="name" class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        </div>
    </div>
    <div>
        <label for="surname" class="block text-sm font-medium leading-5 text-gray-700">Surnames</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="surname" wire:model="surname" class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        </div>
    </div>
    <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Mail</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="email" type="email" wire:model="email" class="form-input block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5">
        </div>
    </div>
    <div class="sm:col-span-2">
        <div class="flex justify-between">
            <label for="how_can_we_help" class="block text-sm font-medium leading-5 text-gray-700">How can I help you?</label>
            <span class="text-sm leading-5 text-gray-500">Max. 500 characters</span>
        </div>
        <div class="mt-1 relative rounded-md shadow-sm">
            <textarea id="how_can_we_help" wire:model="text" maxlength="500" rows="8" class="resize-none form-textarea block w-full transition ease-in-out duration-150 sm:text-sm sm:leading-5"></textarea>
        </div>
    </div>
    <div class="text-right sm:col-span-2">
            <span class="inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Contact
              </button>
            </span>
    </div>
</form>

@if (session()->has('title') || session()->has('description'))
    <x-app-notification :title="session('title')" :description="session('description')" />
@endif

@error('name') <span class="error">{{ $message }}</span> @enderror
@error('surname') <span class="error">{{ $message }}</span> @enderror
@error('email') <span class="error">{{ $message }}</span> @enderror
@error('text') <span class="error">{{ $message }}</span> @enderror
