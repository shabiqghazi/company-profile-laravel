@extends('layouts.layout')
@section('title', 'Artikel')
@section('main')
<div
  class="wrapper py-32 text-dark flex flex-col items-center bg-green-50 gap-16"
>
  <h2 class="text-4xl font-bold text-center">Artikel</h2>
  <div
    class="grid lg:grid-cols-4 md:grid-cols-2 lg:grid-rows-2 md:[&>*:nth-child(1)]:col-span-2 lg:[&>*:nth-child(1)]:row-span-2 gap-3 w-full"
  >
    @foreach($articles as $article)
    <div class="bg-white group rounded-2xl shadow-lg overflow-hidden flex flex-col">
      <img
        src="assets\img\article-image.jpg"
        class="w-full md:aspect-video group-first:aspect-square md:group-first:aspect-video object-cover"
        alt=""
      />
      <div class="flex flex-col justify-between h-full p-4 gap-5">
        <div class="grow flex flex-col gap-2">
          <h3 class="line-clamp-1 font-bold text-xl">
            {{ $article['title'] }}
          </h3>
          <p class="group-first:line-clamp-6 line-clamp-3">
            {{ $article['text'] }}
          </p>
        </div>
        <a href="/article/{{ $article['id'] }}" class="font-semibold text-primary"
          >Baca selengkapnya</a
        >
      </div>
    </div>
    @endforeach
    
  </div>
</div>

@endsection
