@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-black bg-opacity-65 shadow-md rounded px-8 py-6">
                <div class="text-lg font-semibold text-white mb-8">{{ __('Reset Kata Sandi') }}</div>
                <div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-white font-semibold mb-2">{{ __('Alamat Email') }}</label>
                            <input placeholder="Masukkan email" id="email" type="email" class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email') border-red-500 @enderror" 
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-sm text-red-600 mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-white font-semibold mb-2">{{ __('Kata Sandi') }}</label>
                            <input id="password" type="password" class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('password') border-red-500 @enderror" 
                                name="password" required autocomplete="new-password" placeholder="Masukkan kata sandi">
                            @error('password')
                                <span class="text-sm text-red-600 mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="block text-sm font-medium text-white font-semibold mb-2">{{ __('Konfirmasi Kata Sandi') }}</label>
                            <input id="password-confirm" type="password" class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white" 
                                name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi kata sandi">
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                {{ __('Reset Kata Sandi') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
