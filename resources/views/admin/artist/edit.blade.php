@extends('master')
@section('content')
<div class="container mx-auto px-4 py-8 bg-gray-900 text-white">
    <h1 class="text-center text-2xl font-bold mb-6">Edit Data Artis</h1>
    <form action="/admin/artist/{{$artist->id}}" method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('put')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-300">Nama Artis</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ $artist->name }}" 
                class="w-full p-2 mt-1 bg-gray-800 border border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                placeholder="Masukkan nama artis"
            >
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="birthdate" class="block text-sm font-medium text-gray-300">Tanggal Lahir</label>
            <input 
                type="date" 
                id="birthdate" 
                name="date" 
                value="{{ $artist->birthdate }}" 
                class="w-full p-2 mt-1 bg-gray-800 border border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                placeholder="Masukkan tanggal lahir"
            >
            @error('date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="/admin/artist" class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-md text-white transition duration-300">
                &lt; Kembali
            </a>
            <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded-md text-white transition duration-300">
                Perbarui
            </button>
        </div>
    </form>
</div>
@endsection
