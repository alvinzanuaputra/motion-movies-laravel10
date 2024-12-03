@extends('master')
@section('content')
<div class="container mx-auto p-6 bg-gray-900 text-gray-200">
    @if (session('pesan'))
        <div class="bg-green-500 text-white text-sm font-medium px-4 py-2 rounded mb-4">
            {{ session('pesan') }}
        </div>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach($artists as $item)
            <div class="bg-gray-800 p-4 rounded shadow-md">
                <div>
                    <h5 class="text-lg font-bold">{{ $item->name }}</h5>
                    <p class="text-sm">Tanggal Lahir: {{ $item->birthdate }}</p>
                    <form action='/admin/artist/{{$item->id}}' method="post" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        @method('delete')
                        <div class="flex gap-2">
                            <a href="/admin/artist/{{$item->id}}/edit"
                                class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded">Edit</a>
                            <button type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <a href="./"
        class="inline-block justify-content-center bg-gray-700 hover:bg-gray-600 text-gray-200 text-sm px-4 gap-x-1 py-2 rounded hover:scale-95 duration-500 transition-all">
        <div class="flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 256 256">
                <path
                    d="M232,144a64.07,64.07,0,0,1-64,64H80a8,8,0,0,1,0-16h88a48,48,0,0,0,0-96H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,45.66L51.31,80H168A64.07,64.07,0,0,1,232,144Z">
                </path>
            </svg>
            <p class="font-bold">Kembali</p>
        </div>
    </a>
</div>
@endsection