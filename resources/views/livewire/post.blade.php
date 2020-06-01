<div>
    <section class="py-12 px-4 text-center">
        <div class="w-full max-w-2xl mx-auto">
            <span class="text-sm font-semibold">Posts >> {{ $post->title }}</span>
            <h1 class="text-5xl mt-2 leading-tight font-heading">{{ $post->title }}</h1>
        </div>
    </section>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <article class="py-8 px-4">
                {!! $post->content !!}
            </article>
        </div>
    </div>
</div>
