@extends('master')
@section('content')
<div class="container mx-auto p-4">
    @if (session('pesan'))
        <div class="bg-green-500 text-white p-4 rounded-md shadow-md mb-4">
            <p class="font-semibold">{{ session('pesan') }}</p>
        </div>
    @endif

    <div class="bg-gradient-to-r from-purple-500 to-indigo-700 text-white rounded-lg py-6 px-8 shadow-md my-6">
        <h2 class="text-3xl font-bold mb-2">Selamat datang, {{ $user->name }}!</h2>
        <p class="text-lg">Email: <span class="font-semibold">{{ $user->email }}</span></p>
    </div>

    <div class="my-6">
        <a href="/watchlist/create"
            class="w-1/2 sm:w-1/3 lg:w-1/6 flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition-all duration-300 gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 256 256">
                <path
                    d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64Zm8,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16Zm104,48H40a8,8,0,0,0,0,16H144a8,8,0,0,0,0-16Zm88,0H216V168a8,8,0,0,0-16,0v16H184a8,8,0,0,0,0,16h16v16a8,8,0,0,0,16,0V200h16a8,8,0,0,0,0-16Z">
                </path>
            </svg>
            Tambah Movie
        </a>
    </div>

    <div class="bg-gray-900 text-white rounded-lg shadow-md px-6">
        @if ($movies->isEmpty())
            <p class="text-center text-xl font-semibold">Belum ada daftar film yang ditambahkan.</p>
        @else
            <ul class="divide-y divide-gray-700">
                @foreach ($movies as $movie)
                    <li class="flex items-center justify-between py-4">
                        <!-- Bagian gambar dan informasi film -->
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('storage/' . $movie->image) }}" alt="Poster {{ $movie->name }}"
                                class="w-20 h-28 rounded-lg shadow-md object-cover">
                            <div>
                                <h3 class="text-lg font-bold">{{ $movie->name }}</h3>
                                <p class="text-sm text-gray-400">Klik "Lihat" untuk detail lebih lanjut</p>
                            </div>
                        </div>
                        <!-- Bagian tombol aksi -->
                        <div class="inline-block lg:flex items-center gap-4 font-semibold ">
                            <a href="/movie/{{ $movie->id }}"
                                class="flex items-center bg-blue-500 hover:bg-blue-600 text-white text-sm py-2 px-4 rounded-md shadow-md lg:mb-0 sm:mb-2 md:mb-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                                    </path>
                                </svg>Lihat
                            </a>
                            <form action='/watchlist/{{ session('user')->id }}/{{ $movie->id }}' method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="flex items-center bg-red-500 hover:bg-red-600 text-white text-sm py-2 px-4 rounded-md shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                        </path>
                                    </svg>Hapus
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection