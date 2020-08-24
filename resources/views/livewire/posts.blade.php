<div class="bg-gray-50 relative bg-gray-50 pt-16 px-4 sm:px-6 lg:pt-24 lg:px-8">
    <div class="inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                Lo mejor del <span class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">blog</span>
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
            </p>
        </div>
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            <livewire:blog.section :items="$items" :posts="$posts"/>
        </div>
        @if(! $pagination)
            <div class="text-center">
                <span class="inline-flex rounded-md shadow-sm mt-10 mb-10">
                  <a href="{{ route('posts') }}" type="button"
                     class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                    Ver más artículos
                      <svg class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="newspaper w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                  </a>
                </span>
            </div>
        @endif
    </div>
    @if($pagination)
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-5 mb-5 flex text-center">
            {{ $posts->links() }}
        </div>
    @endif
</div>
