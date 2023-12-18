@extends('layouts.layout')
@section('main')
<div
  class="wrapper py-32 text-dark flex flex-col items-center bg-green-50 gap-16"
>
  <h2 class="text-4xl font-bold text-center">Keunggulan Kami</h2>
  <div class="w-full grid sm:grid-cols-3 grid-cols-1 gap-12">
    <div
      class="bg-white shadow-lg px-8 py-12 flex flex-col items-center rounded-3xl gap-3"
    >
      <i class="fi fi-sr-briefcase text-6xl"></i>
      <p class="font-semibold text-center text-xl">Profesional</p>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      </p>
    </div>
    <div
      class="bg-white shadow-lg px-8 py-12 flex flex-col items-center rounded-3xl gap-3"
    >
      <i class="fi fi-sr-shield-check text-6xl"></i>
      <p class="font-semibold text-center text-xl">Aman</p>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      </p>
    </div>
    <div
      class="bg-white shadow-lg px-8 py-12 flex flex-col items-center rounded-3xl gap-3"
    >
      <i class="fi fi-sr-calendar-star text-6xl"></i>
      <p class="font-semibold text-center text-xl">Berpengalaman</p>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
      </p>
    </div>
  </div>
</div>
<div class="wrapper py-32">
  <div
    class="bg-primary overflow-hidden relative px-12 py-16 rounded-3xl flex flex-col items-center gap-14 z-10"
    id="stats"
  >
    <div id="stats-bg-ornament-1" class="absolute -top-32 -left-32"></div>
    <div
      id="stats-bg-ornament-2"
      class="absolute -bottom-48 -right-32"
    ></div>
    <h2 class="text-4xl font-bold text-center text-white">
      Perjalanan Kesuksesan Kami
    </h2>
    <div
      class="grid md:grid-cols-3 grid-cols-1 w-full text-white md:gap-0 gap-16"
    >
      <div class="px-8 flex flex-col gap-4 items-center text-center">
        <p class="font-black">
          <span class="text-7xl font-black">9</span
          ><span class="text-xl font-semibold">tahun</span>
        </p>
        <p class="leading-loose">
          Kami melayani Indonesia untuk berangkat ke tanah suci
        </p>
      </div>
      <div class="px-8 flex flex-col gap-4 items-center text-center">
        <p class="font-black">
          <span class="text-7xl">11872</span>
        </p>
        <p class="leading-loose">Jumlah orang diberangkatkan umrah</p>
      </div>
      <div class="px-8 flex flex-col gap-4 items-center text-center">
        <p class="font-black">
          <span class="text-7xl">976</span>
        </p>
        <p class="leading-loose">Jumlah orang diberangkatkan haji</p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper py-32 bg-green-50 flex justify-center">
  <div class="max-w-md flex flex-col items-center text-center gap-8">
    <p class="arabic text-2xl leading-[3] text-dark">
      وَلِلَّهِ عَلَى ٱلنَّاسِ حِجُّ ٱلْبَيْتِ مَنِ ٱسْتَطَاعَ إِلَيْهِ
      سَبِيلًا ۚ وَمَن كَفَرَ فَإِنَّ ٱللَّهَ غَنِىٌّ عَنِ ٱلْعَٰلَمِي
    </p>
    <p class="text-dark leading-loose">
      Mengerjakan haji adalah kewajiban manusia terhadap Allah, yaitu (bagi)
      orang yang sanggup mengadakan perjalanan ke Baitullah. Barangsiapa
      mengingkari (kewajiban haji), maka sesungguhnya Allah Maha Kaya (tidak
      memerlukan suatu apapun) dari semesta alam.
    </p>
  </div>
</div>
<div
  class="wrapper py-32 text-white flex flex-col items-center bg-dark gap-16"
>
  <h2 class="text-4xl font-bold text-center">Apa Kata Mereka?</h2>
  <div class="relative w-full max-w-lg">
    <div
      class="flex w-full gap-8 overflow-hidden rounded-3xl"
      id="carousel-review"
    >
      <div class="h-full absolute md:-left-12 -left-5 flex items-center">
        <button
          class="bg-white active:scale-95 rounded-full shadow-lg text-dark aspect-square w-8 flex items-center justify-center"
          id="prev-review"
        >
          <i class="fi fi-sr-angle-left flex items-center"></i>
        </button>
      </div>
      <div class="h-full absolute md:-right-12 -right-5 flex items-center">
        <button
          class="bg-white active:scale-95 rounded-full shadow-lg text-dark aspect-square w-8 flex items-center justify-center"
          id="next-review"
        >
          <i class="fi fi-sr-angle-right flex items-center"></i>
        </button>
      </div>
      <div
        class="bg-white min-w-full md:w-fit text-dark py-4 px-6 md:py-11 md:px-14 flex flex-col gap-4"
        id="carousel-item-1"
      >
        <div class="flex gap-7 items-center">
          <img
            src="https://www.mecgale.com/wp-content/uploads/2017/08/dummy-profile.png"
            alt="image"
            class="w-16 aspect-square rounded-full"
          />
          <p class="grow font-semibold">Shabiq Ghazi Arkaan</p>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
          quia corrupti harum id saepe sint eos vero ullam aspernatur
          eveniet aut error deserunt praesentium, esse voluptatibus,
          dignissimos iste dolor dolorum unde rem?
        </div>
      </div>
      <div
        class="bg-white min-w-full md:w-fit text-dark py-4 px-6 md:py-11 md:px-14 flex flex-col gap-4"
      >
        <div class="flex gap-7 items-center">
          <img
            src="https://www.mecgale.com/wp-content/uploads/2017/08/dummy-profile.png"
            alt="image"
            class="w-16 aspect-square rounded-full"
          />
          <p class="grow font-semibold">Shabiq Ghazi Arkaan</p>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
          quia corrupti harum id saepe sint eos vero ullam aspernatur
          eveniet aut error deserunt praesentium, esse voluptatibus,
          dignissimos iste dolor dolorum unde rem?
        </div>
      </div>
      <div
        class="bg-white min-w-full md:w-fit text-dark py-4 px-6 md:py-11 md:px-14 flex flex-col gap-4"
      >
        <div class="flex gap-7 items-center">
          <img
            src="https://www.mecgale.com/wp-content/uploads/2017/08/dummy-profile.png"
            alt="image"
            class="w-16 aspect-square rounded-full"
          />
          <p class="grow font-semibold">Shabiq Ghazi Arkaan</p>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
          quia corrupti harum id saepe sint eos vero ullam aspernatur
          eveniet aut error deserunt praesentium, esse voluptatibus,
          dignissimos iste dolor dolorum unde rem?
        </div>
      </div>
      <div
        class="bg-white min-w-full md:w-fit text-dark py-4 px-6 md:py-11 md:px-14 flex flex-wrap flex-col gap-4"
      >
        <div class="flex gap-7 items-center">
          <img
            src="https://www.mecgale.com/wp-content/uploads/2017/08/dummy-profile.png"
            alt="image"
            class="w-16 aspect-square rounded-full"
          />
          <p class="grow font-semibold">Shabiq Ghazi Arkaan</p>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
          quia corrupti harum id saepe sint eos vero ullam aspernatur
          eveniet aut error deserunt praesentium, esse voluptatibus,
          dignissimos iste dolor dolorum unde rem?
        </div>
      </div>
    </div>
  </div>
</div>
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