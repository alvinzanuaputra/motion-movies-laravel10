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
        <iframe width="100%" height="720" class="w-full h-[300px] lg:h-[620px]" src="{{ $embedUrl }}" frameborder="0"
            allowfullscreen></iframe>
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
            <a href="/admin/{{$movie->id}}/edit"
                class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded hover:scale-95 duration-500 transition-all">
                <div class="flex items-center gap-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z">
                        </path>
                    </svg>
                    <p>Edit</p>
                </div>
            </a>
            <button type="submit"
                class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded hover:scale-95 duration-500 transition-all">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 256 256">
                        <path
                            d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                        </path>
                    </svg>
                    <p>Hapus</p>
                </div>
            </button>
    </div>
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
                                <?php    $date = date('d/m/Y', strtotime($cast->birthdate)); ?>
                                {{ $date }}
                            </div>
                        </div>
                        <form action='/admin/artist/{{$movie->id}}/{{$cast->id}}' method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded hover:scale-95 duration-500 transition-all">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                        </path>
                                    </svg>
                                    <p>Hapus</p>
                                </div>
                        </form>
                    </li>
                @endforeach
                <li class="bg-gray-700 p-4 rounded">
                    <a href="/admin/artist/{{ $movie->id }}" class="text-blue-500 hover:underline">&#43; Tambah
                        Pemeran</a>
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
                            <button type="submit"
                                class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded hover:scale-95 duration-500 transition-all">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                        </path>
                                    </svg>
                                    <p>Hapus</p>
                                </div>
                        </form>
                    </li>
                @endforeach
                <li class="bg-gray-700 p-4 rounded">
                    <a href="/admin/genre/{{ $movie->id }}" class="text-blue-500 hover:underline">&#43; Tambah
                        Genre</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<a href="./" class="inline-block text-sm mx-5 mt-2 font-semibold text-white gap-x-1 bg-gray-700 hover:bg-gray-500 px-4 py-1 rounded hover:scale-95 duration-500 transition-all">
    <div class="flex items-center justify-center ">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#fff" viewBox="0 0 256 256">
            <path
                d="M232,144a64.07,64.07,0,0,1-64,64H80a8,8,0,0,1,0-16h88a48,48,0,0,0,0-96H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,45.66L51.31,80H168A64.07,64.07,0,0,1,232,144Z">
            </path>
        </svg>
        <p>Kembali</p>
    </div>
</a>
</div>
@endsection