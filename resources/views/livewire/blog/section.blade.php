@foreach ($posts as $post)
    <article class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
        <div class="h-full pb-8 rounded shadow-md">
            <a href="{{ route('post', $post->slug) }}">
                <img class="mb-4 rounded-t" src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}">
            </a>
            <div class="px-6">
                <small>
                        <span
                            class="inline-flex bg-gray-600 text-white rounded-full h-6 px-3 mr-2 justify-center items-center">
                            <svg class="h-3 w-3 mr-1" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                      clip-rule="evenodd"></path>
                            </svg> {{ $post->publish_date->diffForHumans() }}
                        </span>
                </small>

                @foreach($post->tags as $tag)
                    <small>
                        <a href="tag">
                                <span
                                    class="inline-flex bg-gray-200 rounded-full h-6 justify-center items-center px-3 py-1 text-xs font-semibold text-gray-700 mt-1 mr-2">
                                        <svg class="h-3 w-3 mr-1" fill="grey" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $tag->name }}
                                    </span>
                        </a>
                    </small>
                @endforeach

                <a href="#">
                    <h3 class="text-xl my-3 font-heading">{{ $post->title }}</h3>
                </a>
                <p class="text-gray-500">{{ $post->excerpt }}</p>
            </div>
        </div>
    </article>
@endforeach

{{ $posts->links() }}
