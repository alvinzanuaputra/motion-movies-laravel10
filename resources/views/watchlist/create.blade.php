@extends('master')
@section('content')
@error('movie_id')
    <div class="bg-red-500 text-white border border-red-600 rounded-md px-6 py-3 m-6 shadow-md">
        <p class="font-semibold">{{ $message }}</p>
    </div>
@enderror

<h1 class="text-2xl font-bold text-left text-white mb-8 mx-6">Pilih Film Disini!</h1>

<div class="flex mx-6 bg-black bg-opacity-65 rounded-md p-8">
    <form action="/watchlist" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Dropdown Film -->
        <div class="mb-6">
            <label for="movie_id" class="block text-lg font-semibold text-white mb-2">
                Pilih Film :
            </label>
            <select id="movie_id" name="movie_id"
                class="w-full py-2.5 px-4 rounded-sm border border-blue-500 bg-gray-900 bg-opacity-65 text-white placeholder-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <option value="" disabled selected>-Pilih Film</option>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex items-center space-x-4">
            <a href="./"
                class="bg-red-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-red-500 transition duration-300">
                &lt; Kembali
            </a>
            <button type="submit"
                class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-green-500 transition duration-300">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection