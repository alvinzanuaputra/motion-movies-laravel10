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
                                class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded hover:scale-95 duration-500 transition-all">
                                <div class="flex items-center gap-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                        viewBox="0 0 256 256">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                        </path>
                                    </svg>
                                    <p>Hapus</p>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <a href="./"
        class="inline-block justify-content-center bg-gray-700 hover:bg-gray-600 text-gray-200 text-sm px-4 gap-x-1 py-2 rounded hover:scale-95 duration-500 transition-all">
        <div class="flex items-center gap-x-1">
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