@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-100 px-6 py-4 border-b border-gray-200 text-lg font-semibold">
                    {{ __('Verifikasi Alamat Email Anda') }}
                </div>

                <div class="p-6">
                    @if (session('resent'))
                        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded-md">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    <p class="mb-4">
                        {{ __('Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi.') }}
                    </p>
                    <p class="mb-4">
                        {{ __('Jika Anda tidak menerima email') }},
                    </p>
                    <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="text-blue-600 hover:underline">
                            {{ __('klik di sini untuk meminta ulang') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
