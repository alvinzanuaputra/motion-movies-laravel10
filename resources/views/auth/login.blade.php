@extends('layouts.app')

@section('content')
<div class="w-full flex items-center justify-center h-screen my-8">
    <!-- untuk desktop dan tablet -->
    <div class="hidden md:block w-2/6 bg-black bg-opacity-65 text-white p-12 rounded-sm shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-2">Masuk</h2>

        @if (session('error_message'))
            <div class="bg-red-500 text-white p-1 rounded mb-1 text-sm">
                {{ session('error_message') }}
            </div>
        @endif

        <form action="/dologin" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-semibold mb-2">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email') border-red-500 @enderror"
                    placeholder="Masukkan email">
                @error('email')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold mb-2">Kata Sandi</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('password') border-red-500 @enderror"
                    placeholder="Masukkan kata sandi">
                @error('password')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                        class="h-4 w-4 text-blue-500 focus:ring-blue-500 rounded">
                    <label for="remember" class="ml-2 text-sm">Ingat Saya</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 underline">
                        Lupa Kata Sandi?
                    </a>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-sm transition-all duration-400">
                    Masuk
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-500 font-semibold duration-500 transition-all underline">
                Daftar sekarang
            </a>
        </p>
    </div>

    <!-- untuk mobile -->
    <div
        class="block md:hidden overflow-y-hidden w-full pt-28 h-screen bg-black bg-opacity-65 text-white p-10 rounded-sm shadow-lg">
        <h2 class="text-3xl font-bold text-left mb-2">Masuk</h2>

        @if (session('error_message'))
            <div class="bg-red-500 text-white p-1 rounded mb-1 text-sm">
                {{ session('error_message') }}
            </div>
        @endif

        <form action="/dologin" method="POST" class="space-y-8">
            @csrf
            <div>
                <label for="email" class="block text-sm font-semibold mb-2">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    autofocus
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email') border-red-500 @enderror"
                    placeholder="Masukkan email">
                @error('email')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold mb-2">Kata Sandi</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('password') border-red-500 @enderror"
                    placeholder="Masukkan kata sandi">
                @error('password')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                        class="h-4 w-4 text-blue-500 focus:ring-blue-500 rounded">
                    <label for="remember" class="ml-2 text-sm">Ingat Saya</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 underline">
                        Lupa Kata Sandi?
                    </a>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-sm transition-all duration-400">
                    Masuk
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-500 font-semibold duration-500 transition-all underline">
                Daftar sekarang
            </a>
        </p>
    </div>
</div>
@endsection