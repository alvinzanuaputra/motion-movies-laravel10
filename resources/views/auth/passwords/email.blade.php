@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-black bg-opacity-65 text-white p-8 rounded-sm shadow-lg">
                <div class="text-2xl font-semibold p-2 rounded-t-lg">
                    {{ __('Reset Kata Sandi') }}
                </div>

                <div class="p-6">
                    @if (session('status'))
                        <div class="bg-green-100 text-green-800 text-sm p-3 rounded mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email"
                                class="block text-white font-bold mb-2">{{ __('Alamat Email ') }}</label>
                            <input id="email" type="email"
                                class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 text-white font-medium py-2 px-4 rounded hover:bg-blue-600">
                                {{ __('Kirim Tautan') }}
                            </button>
                        </div>
                    </form>
                    <p class="text-white mt-12"> *Pastikan alamat email kamu benar dan periksa notifikasi dari email kamu! </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection