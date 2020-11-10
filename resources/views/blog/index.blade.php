@extends('layouts.blog')

@section('content')
<header>
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

    <h1 class="mt-12 mb-6 text-3xl font-black leading-tight text-gray-900">
      {!! $title ?? 'Weekly programming articles.' !!}
    </h1>
  </div>
</header>
<main class="my-20">
  <div class="grid grid-cols-1 gap-6 px-3 mx-auto max-w-7xl sm:px-6 lg:px-8 md:grid-cols-2 lg:grid-cols-3">

    @foreach ($posts as $post)
    <article class="relative group flex flex-col @if($loop->first) md:col-span-2 lg:col-span-3 mb-12 @endif">
      <img class="object-cover w-full rounded-lg h-96" src="{{ $post->featured_image }}" alt="{{ $post->title }}">

      <div
        class="relative flex-1 flex flex-col justify-between @if($loop->first) ml-12 @else mx-6 @endif -mt-32 p-8 max-w-md bg-white rounded-lg transition group-hover:shadow-2xl">

        <h1 class="text-xl font-black">{{ $post->title }}</h1>
        <p class="mt-2 text-sm text-cool-gray-500">{{ $post->summary }}</p>
        <p class="flex mt-4 -mx-1">
          @foreach ($post->tags as $tag)
          <a href="/tags/{{ $tag->slug }}"
            class="relative z-20 px-3 py-1 mx-1 text-xs text-teal-600 bg-teal-100 rounded-full">{{ $tag->name }}</a>
          @endforeach
        </p>
        <div class="flex items-center justify-between mt-6 text-cool-gray-400">
          <p class="text-sm">{{ $post->read_time }}</p>
          <p class="text-sm">{{ $post->created_at->diffForHumans() }}</p>
        </div>
      </div>
      <a href="/posts/{{ $post->slug }}" class="absolute inset-0 z-10"></a>
    </article>
    @endforeach
  </div>

  {{ $posts->links() }}

</main>
@endsection
