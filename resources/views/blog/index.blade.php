@extends('layouts.blog')

@section('content')
<header>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="mt-12 mb-6 text-3xl font-bold leading-tight text-gray-900">
      {!! $title ?? 'Weekly programming articles.' !!}
    </h1>
  </div>
</header>
<main class="my-20">
  <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach ($posts as $post)
    <article class="relative flex flex-col @if($loop->first) md:col-span-2 lg:col-span-3 mb-12 @endif">
      <img class="w-full rounded-lg h-96 object-cover" src="{{ $post->featured_image }}" alt="{{ $post->title }}">

      <div class="relative flex-1 flex flex-col justify-between ml-12 -mt-32 p-8 max-w-md bg-white rounded-lg">

        <h1 class="font-bold text-xl">{{ $post->title }}</h1>
        <p class="mt-2 text-sm text-cool-gray-500">{{ $post->summary }}</p>
        <p class="mt-4 -mx-1 flex">
          @foreach ($post->tags as $tag)
          <a href="/tags/{{ $tag->slug }}"
            class="relative z-20 mx-1 pb-1 px-3 text-xs bg-teal-100 text-teal-600 rounded-full">{{ $tag->name }}</a>
          @endforeach
        </p>
        <div class="mt-6 flex items-center justify-between text-cool-gray-400">
          <p class="text-sm">{{ $post->read_time }}</p>
          <p class="text-sm">{{ $post->created_at->diffForHumans() }}</p>
        </div>
      </div>
      <a href="/posts/{{ $post->slug }}" class="absolute z-10 inset-0"></a>
    </article>
    @endforeach

  </div>
</main>
@endsection
