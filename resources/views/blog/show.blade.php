@extends('layouts.blog', ['seo' => [
'title' => $post->title,
'description' => $post->summary,
'image' => $post->featured_image,
]
])

@push('head')
<link rel="stylesheet" href="/css/atom-one-dark.css">
<script src="/js/highlight.pack.js"></script>
@endpush

@section('content')
<main>
  <div class="relative mx-auto mb-16 max-w-7xl sm:px-6 lg:px-8">
    <img class="relative z-0 object-cover w-full rounded-lg h-96" src="{{ $post->featured_image }}"
      alt="{{ $post->title }}">
    <p class="absolute top-0 left-0 right-0 flex items-center justify-center mt-4">
      @foreach ($post->tags as $tag)
      <a href="/tags/{{ $tag->slug }}"
        class="relative z-20 px-2 py-0.5 mx-1 text-xs font-medium hover:shadow-outline-teal transition text-teal-600 bg-teal-100 rounded-full">{{ $tag->name }}</a>
      @endforeach
    </p>
    <article class="relative z-10 max-w-5xl px-8 py-12 mx-auto -my-12 bg-white rounded-lg md:px-16 lg:px-28">

      <header class="text-center">

        <h1 class="mt-12 text-3xl font-black">{{ $post->title }}</h1>
        <div class="flex items-center justify-center mt-2 text-sm text-cool-gray-400">
          <p>{{ $post->read_time }}</p>
          <span class="px-2 text-cool-gray-800">&middot;</span>
          <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
      </header>

      <div class="mt-16 article text-cool-gray-800">
        {!! $post->body !!}
      </div>

    </article>
  </div>
</main>
@endsection
