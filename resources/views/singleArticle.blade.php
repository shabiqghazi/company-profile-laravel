@extends('layouts.layout')
@section('title', 'Artikel')
@section('main')

<div
  class="wrapper py-32 text-dark flex flex-col items-center bg-green-50 gap-16"
>
  <div class="grid md:grid-cols-3 w-full gap-5 grid-cols-1">
    <div
      class="md:col-span-2 bg-white rounded-3xl flex flex-col p-8 gap-7 shadow-xl"
    >
      <h1 class="font-bold text-2xl leading-loose">
        {{ $article['title'] }}
      </h1>
      <p class="text-slate-500">
        <span class="italic">{{ $article['created_at'] }}</span> | Oleh
        {{ $article['author'] }}
      </p>
      <div class="flex flex-col gap-7">
        <p>
          {{ $article['text'] }}
        </p>
      </div>
    </div>
    <div class="flex flex-col gap-4 items-center">
      <h2 class="font-bold">Artikel Terbaru</h2>
      @foreach($articles as $row)
      <div
        class="flex bg-white overflow-hidden w-full rounded-xl shadow-lg"
      >
        <img
          src="/assets/img/article-image.jpg"
          class="w-28 aspect-square object-cover"
          alt=""
        />
        <div class="p-2">
          <h3 class="line-clamp-1 font-bold">
            {{ $row['title'] }}
          </h3>
          <p class="line-clamp-2">
            {{ $row['text'] }}
          </p>
          <a
            href="/article/{{ $row['id'] }}"
            class="font-semibold text-primary text-sm"
            >Baca selengkapnya</a
          >
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</div>
@endsection