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
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($movies as $movie)
                <div class="bg-gray-800 text-white shadow-md rounded-lg overflow-hidden hover:scale-95 transition-all duration-300">
                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ asset('images/alt.png') }}"
                        class="w-full h-84 object-cover">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold">{{ \Illuminate\Support\Str::words($movie->name, 4, '...') }}</h5>
                        <p class="text-gray-400 text-sm">{{ \Illuminate\Support\Str::words($movie->description, 10, '...') }}</p>
                        <p class="text-gray-400">{{ $movie->studio }}</p>
                        <p class="text-gray-400" {{ $movie->genre }} ></p>
                        <a href="/movie/{{ $movie->id }}"
                            class="inline-block mt-4 bg-blue-600 text-white py-1 px-4 rounded hover:bg-blue-700 hover:scale-95 duration-300 transition-all">
                            Lihat
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
