@extends('master')
@section('content')
<div class="container mx-auto bg-gray-900 text-white p-6 rounded-lg shadow-md">
    <h1 class="text-center text-2xl font-bold mb-4">Tambah Genre</h1>

    @if(session('errormes'))
        <div class="bg-red-500 text-white p-4 rounded-md mb-4">
            {{ session('errormes') }}
        </div>
    @endif

    <form action="/admin/genre/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="genre_id" class="block text-lg font-semibold">Genre</label>
            <select class="w-full p-3 mt-2 bg-gray-800 text-white border border-gray-600 rounded-lg" name="genre_id">
                <option selected value="">-Pilih Genre-</option>
                @foreach ($genres as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('genre_id')
                <div class="bg-red-500 text-white p-3 rounded-md mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex justify-between mt-6">
            <a href="/admin/{{$movie->id}}" class="bg-red-600 text-white py-2 px-6 rounded-md hover:bg-red-700 transition duration-300">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-md hover:bg-blue-700 transition duration-300">Tambahkan</button>
        </div>
    </form>
</div>
@endsection
