@if($posts->total() > 0)
    @foreach ($posts as $post)
    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        @if($post->featured_image !== null)
            <div class="flex-shrink-0">
                <a href="{{ route('post', $post->slug) }}">
                    <img width="414" height="192" class="h-48 w-full object-cover"
                         srcset="{{ asset(ImageCacher::crop($post->featured_image, 382, 192)->getOriginalName()) }} 414w,
                         {{ asset(ImageCacher::crop($post->featured_image, 512, 192)->getOriginalName()) }} 800w,
                         {{ asset(ImageCacher::crop($post->featured_image, 392, 192)->getOriginalName()) }} 1280w"
                         src="{{ asset(ImageCacher::crop($post->featured_image, 414, 192)->getOriginalName()) }}"
                         alt="{{ $post->title }}">
                </a>
            </div>
        @endif
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">

            <div class="flex-1">
                <p class="text-sm leading-5 font-medium text-teal-600">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('posts-tag', $tag->slug) }}">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
                                    {{ $tag->name }}
                            </span>
                        </a>

                    @endforeach
                </p>
                <a href="{{ route('post', $post->slug) }}" class="block">
                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                        {{ $post->title }}
                    </h3>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                        {{ $post->excerpt }}
                    </p>
                </a>
            </div>
            <div class="mt-6 flex items-center">
                <div class="flex text-sm leading-5 text-gray-500">
                    <time datetime="{{ $post->publish_date->format('Y-m-d') }}">
                        {{ $post->publish_date->diffForHumans() }}
                    </time>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif
