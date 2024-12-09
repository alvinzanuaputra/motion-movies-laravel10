<nav class="relative bg-black text-white pl-6 px-1 lg:px-10 ">
    <!-- Overlay untuk menggelapkan layar -->
    <div id="overlay" class="inset-0 bg-black opacity-50 z-40 hidden"></div>

    <!-- Navbar Container -->
    <div class="top-0 w-full z-50">
        <div class="flex items-center py-4 bg-black">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('images/navbar.png') }}" alt="Logo" class="w-40 h-auto lg:w-60">
            </a>

            <!-- Tombol Menu (Mobile) -->
            <button class="lg:hidden flex text-white text-3xl ml-auto" id="navbar-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256">
                    <path
                        d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                    </path>
                </svg>
            </button>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center gap-2 ml-auto font-semibold" id="navbar-menu">
                <ul class="flex gap-4">
                    <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                            fill="#fff" viewBox="0 0 256 256">
                            <path
                                d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64ZM40,80H144V200H40ZM216,200H160V80h56V200Zm-16-84a12,12,0,1,1-12-12A12,12,0,0,1,200,116Zm0,48a12,12,0,1,1-12-12A12,12,0,0,1,200,164Z">
                            </path>
                        </svg><a href="/watchlist" class="hover:text-blue-300">Daftar Tonton</a>
                    </li>
                    <li class="flex items-center gap-x-2">

                        <button id="dropdown-toggle" class="hover:text-blue-500 text-[16px] flex items-center"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="#fff"
                                viewBox="0 0 256 256">
                                <path
                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm12-88a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm44,0a12,12,0,1,1-12-12A12,12,0,0,1,184,128Zm-88,0a12,12,0,1,1-12-12A12,12,0,0,1,96,128Z">
                                </path>
                            </svg>
                            Selebihnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-6 h-4 font-bold" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-menu"
                            class="absolute top-14 hidden bg-black mt-6 py-2 w-80 px-4 rounded-md border border-white shadow-lg">
                            <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="20" fill="#fff" viewBox="0 0 256 256">
                                    <path
                                        d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z">
                                    </path>
                                </svg><a href="/" class="block px-4 py-2 hover:text-blue-700 menu-item">Beranda</a>
                            </li>
                            <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="20" fill="#fff" viewBox="0 0 256 256">
                                    <path
                                        d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64ZM40,80H144V200H40ZM216,200H160V80h56V200Zm-16-84a12,12,0,1,1-12-12A12,12,0,0,1,200,116Zm0,48a12,12,0,1,1-12-12A12,12,0,0,1,200,164Z">
                                    </path>
                                </svg><a href="/watchlist" class="block px-4 py-2 hover:text-blue-700 menu-item">Daftar
                                    Tonton</a>
                            </li>
                            <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="20" fill="#fff" viewBox="0 0 256 256">
                                    <path
                                        d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z">
                                    </path>
                                </svg><a href="/movie" class="block px-4 py-2 hover:text-blue-700 menu-item">Daftar
                                    Movie</a>
                            </li>

                            @if(auth()->user() && auth()->user()->plan_id == 3)
                                <li class="flex gap-1 items-center font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="26" height="24" fill="#0A5EB0" viewBox="0 0 256 256">
                                        <path
                                            d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,0,0,12.25,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.25-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm197.66,33.66-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L216,148.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z">
                                        </path>
                                    </svg> <a href="/admin" class="block px-4 py-2 hover:text-blue-300 menu-item">Admin
                                        <span class="text-blue-500">(dalam mode admin)</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    <li class="flex items-center">
                        <button class="flex items-center pr-2 py-2 w-full text-left hover:text-blue-700 menu-item "
                            id="dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="#fff"
                                viewBox="0 0 256 256">
                                <path
                                    d="M208,48H48A24,24,0,0,0,24,72V184a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V72A24,24,0,0,0,208,48ZM40,96H216v16H160a8,8,0,0,0-8,8,24,24,0,0,1-48,0,8,8,0,0,0-8-8H40Zm8-32H208a8,8,0,0,1,8,8v8H40V72A8,8,0,0,1,48,64ZM208,192H48a8,8,0,0,1-8-8V128H88.8a40,40,0,0,0,78.4,0H216v56A8,8,0,0,1,208,192Z">
                                </path>
                            </svg>
                            Genre
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-menu"
                            class="absolute hidden bg-black top-16 rightw-1/4 rounded border border-white shadow-lg">
                            <li><a href="/movie?search=genre:action"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Action</a></li>
                            <li><a href="/movie?search=genre:adventure"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Adventure</a></li>
                            <li><a href="/movie?search=genre:marvel"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Marvel</a></li>
                            <li><a href="/movie?search=genre:sci-fi"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Sci-Fi</a></li>
                            <li><a href="/movie?search=genre:dc"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">DC</a></li>
                            <li><a href="/movie?search=genre:romance"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Romance</a></li>
                            <li><a href="/movie?search=genre:comedy"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Comedy</a></li>
                            <li><a href="/movie?search=genre:anime"
                                    class="block px-4 py-2 hover:bg-blue-600 menu-item">Anime</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Search Bar & Logout Button (Desktop) -->
            <div class="flex items-center gap-4 ml-6">
                <form action="{{ route('search') }}" method="GET"
                    class="hidden lg:flex items-center relative font-semibold">
                    <button type="submit"
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 px-2 py-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                            viewBox="0 0 256 256">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                            </path>
                        </svg>
                    </button>
                    <input type="search" name="search" value="{{ request('search') }}"
                        class="font-semibold bg-gray-900 text-white rounded-md border border-white px-4 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full pl-12"
                        placeholder="Cari movie disini..." />
                </form>
            </div>

            <div>
                <a href="/logout"
                    class="hidden bg-gray-900 ml-1 lg:flex p-2 rounded-md border hover:bg-blue-700 transition-all"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="#fff"
                        class="hover:text-blue-500" viewBox="0 0 256 256">
                        <path
                            d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="fixed inset-0 z-40 hidden" id="mobile-menu">
        <div class="bg-black text-white p-6 flex flex-col">
            <!-- Tombol X untuk menutup menu -->
            <button id="close-menu" class="text-white text-3xl absolute top-4 right-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <a href="{{ url('/') }}" class="flex items-center mb-6">
                <img src="{{ asset('images/navbar.png') }}" alt="Logo" class="w-40 h-auto lg:w-60">
            </a>

            <ul class="flex flex-col gap-4 font-semibold">
                <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                        fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z">
                        </path>
                    </svg><a href="/" class="hover:text-blue-300">Beranda</a></li>
                <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                        fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64ZM40,80H144V200H40ZM216,200H160V80h56V200Zm-16-84a12,12,0,1,1-12-12A12,12,0,0,1,200,116Zm0,48a12,12,0,1,1-12-12A12,12,0,0,1,200,164Z">
                        </path>
                    </svg><a href="/watchlist" class="hover:text-blue-300">Daftar Tonton</a></li>
                <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                        fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z">
                        </path>
                    </svg><a href="/movie" class="hover:text-blue-300">Daftar Movie</a></li>
                <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                        fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M208,48H48A24,24,0,0,0,24,72V184a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V72A24,24,0,0,0,208,48ZM40,96H216v16H160a8,8,0,0,0-8,8,24,24,0,0,1-48,0,8,8,0,0,0-8-8H40Zm8-32H208a8,8,0,0,1,8,8v8H40V72A8,8,0,0,1,48,64ZM208,192H48a8,8,0,0,1-8-8V128H88.8a40,40,0,0,0,78.4,0H216v56A8,8,0,0,1,208,192Z">
                        </path>
                    </svg>
                    <button class="hover:text-blue-300 flex items-center" id="dropdown-toggle-mobile">
                        Genre
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <ul id="dropdown-menu-mobile"
                        class="hidden fixed bottom-10 left-5 z-50 mt-2 w-1/2 rounded-md border border-white shadow-lg bg-black">
                        <li><a href="/movie?search=genre:action" class="block px-4 py-2 hover:bg-blue-700">Action</a>
                        </li>
                        <li><a href="/movie?search=genre:adventure"
                                class="block px-4 py-2 hover:bg-blue-700">Adventure</a></li>
                        <li><a href="/movie?search=genre:marvel" class="block px-4 py-2 hover:bg-blue-700">Marvel</a>
                        </li>
                        <li><a href="/movie?search=genre:sci-fi" class="block px-4 py-2 hover:bg-blue-700">Sci-Fi</a>
                        </li>
                        <li><a href="/movie?search=genre:dc" class="block px-4 py-2 hover:bg-blue-700">DC</a></li>
                        <li><a href="/movie?search=genre:romance" class="block px-4 py-2 hover:bg-blue-700">Romance</a>
                        </li>
                        <li><a href="/movie?search=genre:comedy" class="block px-4 py-2 hover:bg-blue-700">Comedy</a>
                        </li>
                        <li><a href="/movie?search=genre:anime" class="block px-4 py-2 hover:bg-blue-700">Anime</a></li>
                    </ul>
                </li>
                <li class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                        fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z">
                        </path>
                    </svg><a href="/logout" class="hover:text-blue-300">Logout</a></li>

                @if(auth()->user() && auth()->user()->plan_id == 3)
                    <li class="flex gap-1 items-center font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="26"
                            height="24" fill="#0A5EB0" viewBox="0 0 256 256">
                            <path
                                d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,0,0,12.25,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.25-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm197.66,33.66-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L216,148.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z">
                            </path>
                        </svg>
                        <a href="/admin" class="hover:text-blue-300">Admin
                            <span class="text-blue-500">(dalam mode admin)</span>
                        </a>
                    </li>
                @endif

                <!-- Search Mobile -->
                <form class="flex items-center mt-4 relative font-semibold">
                    <button type="submit"
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 px-2 py-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                            viewBox="0 0 256 256">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                            </path>
                        </svg>
                    </button>
                    <input type="search" name="search" value="{{ request('search') }}"
                        class="font-semibold bg-gray-900 text-white rounded-md border border-white px-4 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full pl-12"
                        placeholder="Cari movie disini..." />
                </form>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const overlay = document.getElementById("overlay");

        // Dropdown Umum (selain Genre)
        const generalDropdownButtons = document.querySelectorAll("#dropdown-toggle");
        const generalDropdownMenus = document.querySelectorAll("#dropdown-menu");

        // Dropdown Genre Khusus
        const genreDropdownButton = document.getElementById("genre-dropdown-button");
        const genreDropdownMenu = document.getElementById("genre-dropdown-menu");

        // Fungsi untuk menonaktifkan hover
        const disableHover = () => document.body.classList.add("disable-hover");
        const enableHover = () => document.body.classList.remove("disable-hover");

        // Fungsi untuk menutup semua dropdown
        const closeAllDropdowns = () => {
            generalDropdownMenus.forEach((menu) => menu.classList.add("hidden"));
            if (genreDropdownMenu) genreDropdownMenu.classList.add("hidden");
            overlay.classList.add("hidden");
            enableHover();
        };

        // Logika untuk dropdown umum
        generalDropdownButtons.forEach((button) => {
            button.addEventListener("click", (event) => {
                event.stopPropagation();

                // Tutup semua dropdown terlebih dahulu
                closeAllDropdowns();

                // Toggle dropdown saat ini
                const dropdownMenu = button.nextElementSibling;
                dropdownMenu.classList.toggle("hidden");

                // Tampilkan overlay jika dropdown terbuka
                if (!dropdownMenu.classList.contains("hidden")) {
                    overlay.classList.remove("hidden");
                    disableHover();
                } else {
                    enableHover();
                }
            });
        });

        // Logika untuk dropdown Genre
        if (genreDropdownButton && genreDropdownMenu) {
            genreDropdownButton.addEventListener("click", (event) => {
                event.stopPropagation();

                // Tutup semua dropdown terlebih dahulu
                closeAllDropdowns();

                // Toggle dropdown Genre
                genreDropdownMenu.classList.toggle("hidden");

                // Tampilkan overlay jika dropdown terbuka
                if (!genreDropdownMenu.classList.contains("hidden")) {
                    overlay.classList.remove("hidden");
                    disableHover();
                } else {
                    enableHover();
                }
            });
        }

        // Tutup semua dropdown jika klik di luar
        document.addEventListener("click", closeAllDropdowns);

        // Tutup dropdown jika overlay diklik
        overlay.addEventListener("click", closeAllDropdowns);

        // Menu Mobile
        document.getElementById('navbar-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.remove('hidden');
            document.getElementById('overlay').classList.remove('hidden');
        });

        document.getElementById('close-menu').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.add('hidden');
            document.getElementById('overlay').classList.add('hidden');
        });

        document.getElementById('dropdown-toggle-mobile').addEventListener('click', function () {
            document.getElementById('dropdown-menu-mobile').classList.toggle('hidden');
        });
    });

</script>