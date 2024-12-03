@extends('master')
@section('content')
<h1 class="text-white px-6 text-left text-2xl font-bold my-5">Tambahkan Movie</h1>
<form action="/admin" method="post" enctype="multipart/form-data" class="px-6 space-y-6">
    @csrf
    <div>
        <label class="text-white block text-md font-semibold mb-2">Judul</label>
        <input type="text" name="name" placeholder="Masukkan judul movie" value="{{ old('name') }}"
            class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white ">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="text-white block text-md font-semibold mb-2">Studio</label>
        <input type="text" name="studio" placeholder="Masukkan studio umum " value="{{ old('studio') }}"
            class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white ">
        @error('studio')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="text-white block text-md font-semibold mb-2">Link Youtube</label>
        <input type="text" name="link" placeholder="Masukkan link youtube (https://www.youtube.com/watch?..)"
            value="{{ old('link') }}"
            class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white ">
        @error('link')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="">
            <label class="text-white block text-md font-semibold mb-2">Tanggal Rilis</label>
            <input type="date" name="release_date" value="{{ old('release_date') }}"
                class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white">
            @error('release_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>



        <div>
            <label class="text-white block text-md font-semibold mb-2">Thumbnail Movie</label>
            <input type="file" name="image" id="image-input"
                class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white "
                accept="image/*">
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <!-- Tempat gambar pratinjau -->
            <div id="image-preview" class="mt-4">
                <!-- Akan muncul gambar jika diunggah -->
            </div>
        </div>
    </div>
    <div class="flex items-center">
        <input type="hidden" name="paid" value="0">
        <input type="checkbox" name="paid" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
        <label class="ml-2 block text-sm text-white font-semibold">Apakah film berbayar ?</label>
        @error('paid')
            <p class="text-red-500 text-sm ml-2">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="text-white block text-md font-semibold mb-2">Genre Utama</label>
        <select name="genre"
            class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white ">
            <option selected value="">-Pilih Genre-</option>
            @foreach ($genres as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        @error('genre')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label class="text-white block text-md font-semibold mb-2">Tags</label>
        <input type="text" name="tags" placeholder="Action | Adventure | Fiction" value="{{ old('tags') }}"
            class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white ">
    </div>
    <div class="flex justify-between">
        <a href="./"
            class="flex items-center font-semibold text-white gap-x-1 bg-red-500 hover:bg-red-600 px-4 py-1 rounded hover:scale-95 duration-500 transition-all"><svg
                xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#fff" viewBox="0 0 256 256">
                <path
                    d="M232,144a64.07,64.07,0,0,1-64,64H80a8,8,0,0,1,0-16h88a48,48,0,0,0,0-96H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,45.66L51.31,80H168A64.07,64.07,0,0,1,232,144Z">
                </path>
            </svg>Kembali</a>
        <button type="submit"
            class="flex items-center font-bold gap-x-1 text-white bg-green-500 hover:bg-green-600 px-4 py-1 rounded hover:scale-95 duration-500 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#fff" viewBox="0 0 256 256">
                <path
                    d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z">
                </path>
            </svg>Tambakan</button>
    </div>
</form>
<script>
    const imageInput = document.getElementById('image-input');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Pratinjau Gambar" class="absolute bottom-20 lg:bottom-10 right-10 w-40 md:w-60 lg:w-80 rounded-md border border-blue-500 shadow-md shadow-blue-500">`;
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = '';
        }
    });
</script>
@endsection