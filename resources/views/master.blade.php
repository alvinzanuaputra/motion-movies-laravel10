<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motion Movies</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  @vite(['resources/css/app.css'])
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #0F0F0F;
    }

    /* Ubah warna ikon kalender */
    input[type="date"]::-webkit-calendar-picker-indicator {
      filter: invert(1);
    }

    /* Nonaktifkan hover secara global */
    .disable-hover * {
      pointer-events: none !important;
    }

    /* Izinkan elemen tertentu tetap aktif */
    .disable-hover .dropdown-menu,
    .disable-hover .dropdown-menu * {
      pointer-events: auto !important;
    }

    .disable-hover .menu-item {
      pointer-events: auto !important;
    }

    /* Dropdown umum */
    .dropdown-menu,
    #genre-dropdown-menu {
      position: absolute;
      background: white;
      border: 1px solid #ddd;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 20;
      display: none;
      /* Pastikan dropdown tersembunyi secara default */
    }

    /* Menampilkan dropdown */
    .dropdown-menu.show,
    #genre-dropdown-menu.show {
      display: block;
    }

    /* Posisi dropdown jika dibutuhkan */
    #genre-dropdown-menu {
      top: 100%;
      /* Sesuaikan posisi dropdown genre */
      left: 0;
      /* Pastikan berada di bawah tombol */
    }

  </style>
</head>

<body>
  @include('navbar')
  <div class="content mx-5 my-4">
    @yield('content')
  </div>
  @include('footer')
  @include('components.backtotop')

</body>

</html>