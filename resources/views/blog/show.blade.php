@extends('layouts.blog')

@push('head')
<link rel="stylesheet" href="/css/atom-one-dark.css">
<script src="/js/highlight.pack.js"></script>
@endpush

@section('content')
<main>
  <div class="relative max-w-7xl mx-auto sm:px-6 lg:px-8 mb-16">
    <img class="w-full rounded-lg h-96 object-cover relative z-0" src="{{ $post->featured_image }}"
      alt="{{ $post->title }}">
    <p class="mt-4 absolute top-0 right-0 left-0 flex items-center justify-center">
      @foreach ($post->tags as $tag)
      <a href="/tags/{{ $tag->slug }}"
        class="relative z-20 mx-1 py-1 px-3 text-xs bg-teal-100 text-teal-600 rounded-full">{{ $tag->name }}</a>
      @endforeach
    </p>
    <article class="-my-12 mx-auto py-12 px-8 md:px-16 lg:px-28 max-w-5xl bg-white rounded-lg relative z-10">

      <header class="text-center">

        <h1 class="mt-12 font-bold text-xl">{{ $post->title }}</h1>
        <div class="mt-2 text-sm flex items-center justify-center text-cool-gray-400">
          <p>{{ $post->read_time }}</p>
          <span class="px-2 text-cool-gray-800">&middot;</span>
          <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
      </header>

      <div class="article mt-16 text-cool-gray-800">
        {!! $post->body !!}
      </div>

    </article>
  </div>
</main>
@endsection
