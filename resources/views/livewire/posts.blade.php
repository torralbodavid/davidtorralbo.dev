<div class="bg-gray-50 relative bg-gray-50 pt-16 px-4 sm:px-6 lg:pt-24 lg:px-8">
    <div class="inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                From the blog
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
            </p>
        </div>
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            <livewire:blog.section :items="$items"/>
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-5 mb-5 content-center">
        @if($pagination)
            {{ $posts->links() }}
        @else
            <span class="inline-flex rounded-md shadow-sm mt-5 mb-5">
              <a href="{{ route('posts') }}" type="button"
                 class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                See more posts
                  <svg class="ml-3 -mr-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
              </a>
            </span>
        @endif
    </div>
</div>
