@section('title', $post->title)
@if($post->meta['meta_description'] !== null)
    @section('description', $post->meta['meta_description'])
@endif
@section('cards')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $post->meta['opengraph_title'] }}" />
    <meta property="og:description" content="{{ $post->meta['opengraph_description'] }}" />
    <meta property="og:image" content="{{ asset($post->meta['opengraph_image']) }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@torralbo_" />
    <meta name="twitter:title" content="{{ $post->meta['twitter_title'] }}" />
    <meta name="twitter:description" content="{{ $post->meta['twitter_description'] }}" />
    <meta name="twitter:image" content="{{ asset($post->meta['twitter_image']) }}" />
@endsection

<article class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                 viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384"
                 fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                 viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>
            </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="text-center mb-14">
                @php
                    $created = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->publish_date);
                @endphp
                <span class="text-base leading-6 font-semibold text-indigo-600 tracking-wide uppercase" title="{{ $created->format('d-m-Y H:i') }}">Published {{ $created->diffForHumans() }}</span>
                <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">{{ $post->title }}</h1>
                <p class="max-w-xl mt-5 mx-auto text-xl leading-7 text-gray-500">{{ $post->excerpt }}</p>
            </div>
        </div>
        <div class="prose prose-lg text-gray-500 mx-auto">
            {!! $post->content !!}
        </div>
    </div>
</article>

