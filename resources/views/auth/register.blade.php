@extends('layouts.app')

@section('content')
<div class="w-full flex items-center justify-center my-8">
    <!-- untuk desktop dan tablet -->
    <div class="hidden md:block w-2/5 bg-black bg-opacity-65 text-white p-12 rounded-sm shadow-lg mt-80 mb-20">
        <h2 class="text-3xl font-bold text-center mb-2">Daftar</h2>
        @if (session('error_message'))
            <div class="bg-red-500 text-white p-1 rounded mb-1 text-sm">
                {{ session('error_message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-semibold mb-2">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('name')  @enderror"
                    placeholder="Masukkan nama lengkap">
                @error('name')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold mb-2">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email')  @enderror"
                    placeholder="Masukkan email">
                @error('email')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold mb-2">Kata Sandi</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('password')  @enderror"
                    placeholder="Masukkan kata sandi">
                @error('password')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password-confirm" class="block text-sm font-semibold mb-2">Konfirmasi Kata Sandi</label>
                <input id="password-confirm" type="password" name="password_confirmation" required
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Konfirmasi kata sandi">
            </div>

            <div class="row mb-8">
                <label for="plan" class="col-md-4 mb-8 col-form-label text-sm text-md-end font-semibold">{{ __('Rencana') }}</label>

                <div class="col-md-6">
                    <?php 
                        use App\Models\Plan;
                        $plans = Plan::all();
                    ?>
                    <select name="plan_id"
                        class="w-full py-2.5 px-3 mt-2 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white">
                        <option value="" selected>- Pilih Paket -</option>
                        @foreach ($plans as $item)
                            @if ($item->id != 3) <!-- Sembunyikan ID ke-3 -->
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('plan_id')
                        <p class="text-red-500 text-sm mt-2">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-sm transition-all duration-400 mt-4">
                    Daftar
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-500 font-semibold duration-500 transition-all underline">
                Masuk sekarang
            </a>
        </p>
    </div>

    <!-- untuk mobile -->
    <div
        class="block md:hidden overflow-y-hidden w-full pt-40 bg-black bg-opacity-65 text-white p-10 rounded-sm shadow-lg">
        <h2 class="text-3xl font-bold text-left mb-2">Daftar</h2>

        @if (session('error_message'))
            <div class="bg-red-500 text-white p-1 rounded mb-1 text-sm">
                {{ session('error_message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-8">
            @csrf
            <div>
                <label for="name" class="block text-sm font-semibold mb-2">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('name')  @enderror"
                    placeholder="Masukkan nama lengkap">
                @error('name')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold mb-2">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('email')  @enderror"
                    placeholder="Masukkan email">
                @error('email')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold mb-2">Kata Sandi</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white @error('password')  @enderror"
                    placeholder="Masukkan kata sandi">
                @error('password')
                    <p class="text-red-300 text-sm mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password-confirm" class="block text-sm font-semibold mb-2">Konfirmasi Kata Sandi</label>
                <input id="password-confirm" type="password" name="password_confirmation" required
                    class="w-full py-2.5 px-3 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Konfirmasi kata sandi">
            </div>

            <div class="col-md-6">
                <?php<? foreach ($plans as $plan): ?>
                    <select name="plan_id"
                        class="w-full py-2.5 px-3 mt-2 rounded-sm border border-blue-500 bg-gray-800 bg-opacity-65 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white">
                        <option value="" selected>- Pilih Paket -</option>
                        @foreach ($plans as $item)
                            @if ($item->id != 3) <!-- Sembunyikan ID ke-3 -->
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('plan_id')
                        <p class="text-red-500 text-sm mt-2">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

            <div class="flex items-center justify-between mt-4">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-sm transition-all duration-400">
                    Daftar
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-500 font-semibold duration-500 transition-all underline">
                Masuk sekarang
            </a>
        </p>
    </div>
</div>
@endsection