<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Motion Movies</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        body {
            background: url("{{ asset('images/background.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="m-0 p-0">
    <div id="app">
        <!-- Navbar -->
        <nav
            class="fixed top-0 w-full z-10 bg-gradient-to-b from-black to-transparent px-6 lg:px-20 py-3 flex justify-between items-center transition-all duration-500">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('images/navbar.png') }}" alt="Logo" class="mt-2 w-60 h-auto">
                </a>
            </div>


            <ul class="flex space-x-5 items-center">
                @guest
                    <!-- Cek apakah bukan halaman /login atau /formlogin -->
                    @if (!Request::is('login') && !Request::is('formlogin') && Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}"
                                class="text-white font-semibold border border-white py-2 px-4 rounded-full hover:bg-white hover:text-black transition-all">
                                {{ __('Masuk') }}
                            </a>
                        </li>
                    @endif
                    @if (Route::has('register') && !Request::is('register'))
                        <li>
                            <a href="{{ route('register') }}"
                                class="text-white font-semibold border border-white py-2 px-4 rounded-full hover:bg-white hover:text-black transition-all">
                                {{ __('Daftar') }}
                            </a>
                        </li>
                    @endif
                @else
                    <!-- Jika sudah login, tampilkan menu profil atau logout -->
                    <li class="relative group">
                        <a href="#"
                            class="text-white font-semibold py-2 px-4 rounded-full border border-white hover:bg-white hover:text-black transition-all">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="hidden group-hover:block absolute right-0 mt-2 bg-black py-2 rounded-lg shadow-lg">
                            <li>
                                <a href="#" class="block text-white px-4 py-2 hover:bg-gray-700 transition-all">Profil</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block text-white px-4 py-2 hover:bg-gray-700 transition-all"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>


        </nav>
        <!-- Main Content -->
        <main class="flex justify-center items-center h-screen">
            @yield('content')
        </main>
    </div>
</body>

</html>