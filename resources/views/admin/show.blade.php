<?php
$link = $movie->link;
$videoId = substr(parse_url($link, PHP_URL_QUERY), 2);
$embedUrl = "https://www.youtube.com/embed/$videoId";
?>
@extends('master')
@section('content')
<div class="container mx-auto p-6 bg-gray-900 text-gray-200">
    @if (session('pesan'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('pesan') }}
        </div>
    @endif
    <div class="aspect-w-16 aspect-h-9 mb-6 rounded border border-black">
        <iframe width="100%" height="720" class="w-full h-[300px] lg:h-[620px]" src="{{ $embedUrl }}" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="p-6 bg-gray-800 rounded shadow-md">
        <h1 class="text-2xl font-bold mb-4">{{ $movie->name }}</h1>
        <p class="mb-2"><span class="font-semibold">Studio:</span> {{ $movie->studio }}</p>
        <?php $date = date('d/m/Y', strtotime($movie->release_date)); ?>
        <hr class="border-gray-700 my-4">
        <p><span class="font-semibold">Tanggal Rilis:</span> {{ $date }}</p>
        <hr class="border-gray-700 my-4">
        <p><span class="font-semibold">Tagar:</span> {{ $movie->tags }}</p>
        
        <hr class="border-gray-700 my-4">
        <form action='/admin/{{$movie->id}}' method="POST" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <a href="/admin/{{$movie->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">Hapus</button>
        </form>
        
        <div class="grid md:grid-cols-2 gap-4 mt-6">
            <div>
                <h2 class="text-xl font-bold mb-2">Pemeran:</h2>
                <ul class="space-y-2">
                    @foreach($movie->artist as $cast)
                        <li class="bg-gray-700 p-4 rounded flex justify-between items-center">
                            <div>
                                <div class="font-semibold">{{ $cast->name }}</div>
                                <div class="text-sm text-gray-300">
                                    Tanggal Lahir: 
                                    <?php $date = date('d/m/Y', strtotime($cast->birthdate)); ?>
                                    {{ $date }}
                                </div>
                            </div>
                            <form action='/admin/artist/{{$movie->id}}/{{$cast->id}}' method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm">Hapus</button>
                            </form>
                        </li>
                    @endforeach
                    <li class="bg-gray-700 p-4 rounded">
                        <a href="/admin/artist/{{ $movie->id }}" class="text-blue-500 hover:underline">&#43; Tambah Pemeran</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Genre:</h2>
                <ul class="space-y-2">
                    @foreach($movie->genre as $genres)
                        <li class="bg-gray-700 p-4 rounded flex justify-between items-center">
                            <div>{{ $genres->name }}</div>
                            <form action='/admin/genre/{{$movie->id}}/{{$genres->id}}' method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm">Hapus</button>
                            </form>
                        </li>
                    @endforeach
                    <li class="bg-gray-700 p-4 rounded">
                        <a href="/admin/genre/{{ $movie->id }}" class="text-blue-500 hover:underline">&#43; Tambah Genre</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <a href="./" class="inline-block mt-6 bg-gray-700 hover:bg-gray-600 text-gray-200 text-sm px-4 py-2 rounded">&lt;&lt; Kembali</a>
</div>
@endsection
