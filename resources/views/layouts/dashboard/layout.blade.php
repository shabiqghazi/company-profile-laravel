<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TASTY FOOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/dashboardStyle.css') }}" />
  </head>
  <body class="overflow-x-hidden">
    <div class="row page-wrapper">
    <aside class="col-3 bg-dark position-sticky text-white px-0 py-4">
      <div class="d-flex justify-content-center">
        <div class="nav-brand">
          TASTY FOOD
        </div>
      </div>
      <div class="menu-list mt-3 px-3 d-flex flex-column gap-2">
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/dashboard">Dashboard</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/dashboard/berita">Berita</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/dashboard/galeri">Galeri</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/dashboard/kontak">Kontak</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/dashboard/tentang">Tentang</a>
        </div>
      </div>
    </aside>
    <div class="col-9 ps-0 bg-light">
      <nav class="w-full shadow d-flex justify-content-end py-3 bg-white px-4 gap-2">
        <p class="m-0">Admin</p>
        <a href="/logout"><img src="/assets/sign-out-alt.svg" alt="" style="width: 14pt;"></a>
      </nav>
      <main class="card m-3 p-4 rounded-3">

    @section('main')
    @show
        </main>
      </div>
    </div>
    <script type="text/javascript" src="{!! asset('/script/dashboardScript.js') !!}"></script>
  </body>
</html>