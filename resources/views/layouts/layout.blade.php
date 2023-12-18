<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="/style/style.css" />
    <link rel="stylesheet" type="text/css" href="/build/assets/app-777e774b.css" />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
  </head>
  <body>
    @if(Request::path() === '/')
      <div
        class="h-screen w-full flex items-center bg-center bg-[linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://imran-travel.up.railway.app/assets/img/leading_background.jpg')] bg-cover"
        id="featured"
      >
        @include('components.header')
        <div class="wrapper flex flex-col gap-5">
          <h2 class="max-w-xl text-4xl leading-loose text-white">
            Kesejatian <span class="font-bold">Hidup</span>.<br /><span
              class="font-bold"
              >Berkah</span
            >
            di Setiap Jejak<br /><span class="font-bold">Haji</span> dan
            <span class="font-bold">Umrah</span>.
          </h2>
          <div class="flex sm:flex-row flex-col gap-3">
            <a href="https://wa.me/628562022799" 
              class="bg-light py-2.5 px-8 rounded-full text-dark items-center flex justify-center w-fit"
            >
              Hubungi Kami
            </a>
            <button
              class="border-2 border-light py-2.5 px-8 rounded-full text-light items-center flex justify-center w-fit gap-2"
            >
              Eksplor Paket
              <i class="fi fi-rr-arrow-right items-center flex"></i>
            </button>
          </div>
        </div>
      </div>
    @else 
      <div
        class="py-60 w-full flex items-center bg-center bg-[linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('http://127.0.0.1:8000/assets/img/leading_background.jpg')] bg-cover"
        id="featured"
      >
        @include('components.header')
        <div class="wrapper flex flex-col gap-5">
          <h2 class="max-w-xl text-4xl leading-loose text-white font-bold">
            @yield('title')
          </h2>
        </div>
      </div>
    @endif
    @section('main')
    
    @show
    @include('components.footer')
    <script src="/script/carousel.js"></script>
    <script src="/script/header.js"></script>
    <script src="/build/assets/app-777e774b.css"></script>
  </body>
</html>
