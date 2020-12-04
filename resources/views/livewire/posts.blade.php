@section('title', 'The programmer\'s blog')

<div class="relative px-4 sm:px-6 lg:px-8">
    <div class="inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                The best of the <span class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">blog</span>
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
            </p>
        </div>
        @if($posts->total() > 0)
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                <livewire:blog.section :items="$items" :posts="$posts"/>
            </div>
            @if(! $pagination)
                <div class="text-center">
                    <span class="inline-flex rounded-md shadow-sm mt-10 mb-10">
                        <form action="{{ route('posts') }}">
                          <button type="submit"
                             class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                            See more posts
                              <svg class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="newspaper w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                          </button>
                        </form>
                    </span>
                </div>
            @endif
        @else
            <div class="mt-12 mb-12 grid gap-5 max-w-lg mx-auto lg:max-w-none">
                <div class="rounded-md bg-blue-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3 flex-1 md:flex md:justify-between">
                            <p class="text-sm text-blue-700">
                                There is no posts... yet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @if($pagination)
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-5 mb-5 flex text-center">
            {{ $posts->links() }}
        </div>
    @endif
</div>
