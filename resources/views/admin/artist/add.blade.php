@extends('master')
@section('content')
<div class="container mx-auto px-6 py-6 bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-center text-white text-2xl font-bold mb-6">Tambah Pemeran</h1>
    
    @if(session('errormes'))
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        {{ session('errormes') }}
    </div>
    @endif

    <form action="/admin/artist/{{ $movie->id }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <!-- Pilih Artis -->
        <div>
            <label class="block text-white font-semibold mb-2">Pilih Artis</label>
            <select class="w-full py-2.5 px-3 bg-gray-700 text-white rounded-md border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300" name="artist_id">
                <option selected value="">-Artis Tersedia-</option>
                @foreach ($artists as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('artist_id')
            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol Kirim -->
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-md">
            Kirim
        </button>
    </form>

    <div class="my-6 border-t border-gray-600"></div>

    <form action="/admin/artist/{{ $movie->id }}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <!-- Nama Artis -->
        <div>
            <label class="block text-white font-semibold mb-2">Nama Artis (Jika belum ada di daftar)</label>
            <input type="text" class="w-full py-2.5 px-3 bg-gray-700 text-white rounded-md border border-blue-500 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300" name="artist" placeholder="Pastikan pemeran tidak ada di daftar" value="{{ old('artist') }}">
            @error('artist')
            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal Lahir -->
        <div>
            <label class="block text-white font-semibold mb-2">Tanggal Lahir</label>
            <input type="date" class="w-full py-2.5 px-3 bg-gray-700 text-white rounded-md border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300" name="date" value="{{ old('date') }}">
            @error('date')
            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-between">
            <a href="/admin/{{ $movie->id }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-md">
                &lt; Kembali
            </a>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold px-4 py-2 rounded-md">
                Tambah Baru
            </button>
        </div>
    </form>
</div>
@endsection
