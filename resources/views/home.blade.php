@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-blue-500 text-white font-semibold text-lg px-6 py-4">
                {{ __('Dashboard') }}
            </div>
            <div class="p-6">
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="text-gray-700">
                    {{ __('Kamu Sudah Masuk!') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
