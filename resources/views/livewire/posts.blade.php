@section('title', $tag === null ? 'The programmer\'s blog' : "{$page_tag->name} | The programmer's blog")
@section('description', $page_tag !== null ? $page_tag->name. '|' : '' . "I'm going to take advantage of this space on the internet to share all the knowledge I can about tech, as well as gain as much experience as I can.")

<div class="relative px-4 sm:px-6 lg:px-8 mt-12">
    <div class="inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h1 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                @if($tag === null)
                    David Torralbo's <span
                        class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">blog</span> posts
                @else
                    All posts about <span
                        class="text-white bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500">{{ $page_tag->name }}</span>
                @endif
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                @if($tag === null)
                    I'm going to take advantage of this space on the internet to share all the knowledge I can about tech, as well as gain as much experience as I can.
                @else
                    Here you can find out all posts about <strong>{{ $page_tag->name }}</strong>. Feel free to read them!
                @endif
            </p>
        </div>
        @if($posts->total() > 0)
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                <livewire:blog.section :items="$items" :posts="$posts"/>
            </div>
            @if(! $pagination)
                <div class="text-center">
                    <div class="inline-flex rounded-md shadow mt-10 mb-10">
                        <a href="{{ route('posts') }}"
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            See more posts
                            <svg class="ml-3 -mr-1 h-5 w-5 newspaper w-6 h-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
        @else
            <div class="mt-12 mb-12 grid gap-5 max-w-lg mx-auto lg:max-w-none">
                <div class="rounded-md bg-blue-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                      clip-rule="evenodd"/>
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
