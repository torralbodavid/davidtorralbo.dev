@foreach ($posts as $post)
    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
            <a href="{{ route('post', $post->slug) }}">
                <img class="h-48 w-full object-cover"
                     srcset="{{ ImageCacher::resize(str_replace('storage/img/', '', $post->featured_image), 382, 192)->getOriginalName() }} 414w,
                         {{ ImageCacher::resize(str_replace('storage/img/', '', $post->featured_image), 512, 192)->getOriginalName() }} 800w,
                         {{ ImageCacher::resize(str_replace('storage/img/', '', $post->featured_image), 392, 192)->getOriginalName() }} 1280w"
                     src="{{ ImageCacher::resize(str_replace('storage/img/', '', $post->featured_image), 414, 192)->getOriginalName() }}"
                     alt="{{ $post->title }}">
            </a>
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">

            <div class="flex-1">
                <p class="text-sm leading-5 font-medium text-teal-600">
                    @foreach($post->tags as $tag)
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-indigo-100 text-indigo-800">
                            <a href="#" class="hover:underline">
                                {{ $tag->name }}
                            </a>
                        </span>
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
                    <span class="mx-1">
                      &middot;
                    </span>
                    <span>
                      6 min read
                    </span>
                </div>
            </div>
        </div>
    </div>
@endforeach
