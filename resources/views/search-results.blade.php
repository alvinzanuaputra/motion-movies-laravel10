@extends('master')

@section('content')
<div class="container mx-auto bg-[#0F0F0F] p-4">
    @if (session('pesan'))
        <div class="bg-green-500 text-white p-4 rounded-md shadow-md mb-4 font-bold" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold text-white mb-6">Hasil Pencarian untuk: "{{ request('search') }}"</h1>

    @if ($movies->isEmpty())
        <p class="text-lg text-gray-500">Tidak ada film yang ditemukan.</p>
    @else
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 lg:grid-cols-6 gap-4">
            @foreach ($movies as $movie)
                <div class="inline-block bg-gray-800 text-white shadow-md rounded-lg overflow-hiddentransition-all duration-300 border">
                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                        class="w-full h-84 object-cover rounded-lg">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold">{{ \Illuminate\Support\Str::words($movie->name, 4, '...') }}</h5>
                        <p class="text-gray-400 text-sm">{{ \Illuminate\Support\Str::words($movie->description, 10, '...') }}
                        </p>
                        <p class="text-gray-400">{{ $movie->studio }}</p>
                        <p class="text-gray-400" {{ $movie->genre }}></p>
                        <a href="/movie/{{ $movie->id }}"
                            class="w-full flex items-center justify-center mt-4 bg-blue-600 text-white py-1 gap-x-1 px-4 rounded hover:bg-blue-700 hover:scale-95 duration-500 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#fff" viewBox="0 0 256 256">
                                <path
                                    d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                                </path>
                            </svg>
                            <p class="font-bold">Lihat</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection