@extends('master')
@section('content')
<div class="container mx-auto p-6">
    @if (session('pesan'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('pesan') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div>
            <a href="/admin/create"
                class="flex items-center gap-x-2 bg-blue-500 hover:bg-blue-700 hover:scale-95 text-white font-semibold py-2 px-4 rounded text-center duration-500 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 256 256">
                    <path
                        d="M230.91,124A8,8,0,0,1,228,134.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,121.09l92,53.65,92-53.65A8,8,0,0,1,230.91,124ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26ZM232,192H216V176a8,8,0,0,0-16,0v16H184a8,8,0,0,0,0,16h16v16a8,8,0,0,0,16,0V208h16a8,8,0,0,0,0-16Zm-92,23.76-12,7L36,169.09A8,8,0,0,0,28,182.91l96,56a8,8,0,0,0,8.06,0l16-9.33A8,8,0,1,0,140,215.76Z">
                    </path>
                </svg>Tambahkan Movie
            </a>
        </div>
        <div>
            <a href="/admin/artist"
                class="flex items-center gap-x-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded text-center hover:scale-95 duration-500 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 256 256">
                    <path
                        d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-16,72h16v48H192Zm16-16H192V48h16ZM48,48H176V208H48ZM208,208H192V168h16v40Zm-56.25-42a39.76,39.76,0,0,0-17.19-23.34,32,32,0,1,0-45.12,0A39.84,39.84,0,0,0,72.25,166a8,8,0,0,0,15.5,4c2.64-10.25,13.06-18,24.25-18s21.62,7.73,24.25,18a8,8,0,1,0,15.5-4ZM96,120a16,16,0,1,1,16,16A16,16,0,0,1,96,120Z">
                    </path>
                </svg>Menu Artis
            </a>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
        @foreach ($movies as $i)
            <div class="bg-gray-800 text-white rounded shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $i->image) }}" alt="{{ asset('images/alt.png') }}"
                    class="w-full h-84 object-cover">
                <div class="p-4">
                    <h5 class="text-lg font-semibold">{{ \Illuminate\Support\Str::words($i->name, 2, '...') }}</h5>
                    <p class="text-gray-400 text-sm mb-4">{{ $i->studio }}</p>
                    <form action='/admin/{{ $i->id }}' method="post" enctype="multipart/form-data" class="space-y-2">
                        @csrf
                        @method('delete')
                        <a href="/admin/{{ $i->id }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-sm block text-center">
                            Lihat
                        </a>
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded text-sm block w-full">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection