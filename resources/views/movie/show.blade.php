<?php
$link = $movie->link;
$videoId = substr(parse_url($link, PHP_URL_QUERY), 2);
$embedUrl = "https://www.youtube.com/embed/$videoId";
?>
@extends('master')
@section('content')
<div class="container mx-auto p-6 bg-gray-900 text-gray-200">
	<div class="aspect-w-16 aspect-h-9 mb-6 rounded border border-black">
		<iframe width="100%" height="720" class="w-full h-[300px] lg:h-[620px] embed-responsive-item"
			src="{{ $embedUrl }}"></iframe>
	</div>
	<div class="p-6 bg-gray-800 rounded shadow-md">
		<h1 class="text-2xl font-bold mb-4">{{ $movie->name }}</h1>
		<p class="mb-2"><span class="font-semibold">Studio:</span> {{ $movie->studio }}</p>
		<?php $date = date('d/m/Y', strtotime($movie->release_date)); ?>
		<hr class="border-gray-700 my-4">
		<p><span class="font-semibold">Tanggal Rilis:</span> {{ $date }}</p>
		<hr class="border-gray-700 my-4">
		<p><span class="font-semibold">Tagar:</span> {{ $movie->tags }}</p>
		<div class="grid md:grid-cols-2 gap-4 mt-6">
			<div>
				<h2 class="text-xl font-bold mb-2">Pemeran:</h2>
				<ul class="space-y-2">
					@foreach($movie->artist as $cast)
						<li class="bg-gray-700 p-4 rounded">
							<div class="font-semibold">{{ $cast->name }}</div>
							<div>
								<span class="font-light text-sm">Tanggal Lahir:</span>
								<?php $date = date('d/m/Y', strtotime($cast->birthdate)); ?>
								{{ $date }}
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			<div>
				<h2 class="text-xl font-bold mb-2">Genre:</h2>
				<ul class="space-y-2">
					@foreach($movie->genre as $genres)
						<li class="bg-gray-700 p-4 rounded">
							{{ $genres->name }}
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<a href="/movie"
		class="mt-4 gap-x-2 inline-block font-semibold text-white  bg-gray-800 hover:bg-gray-600 px-4 py-2 rounded hover:scale-95 duration-500 transition-all">
		<div class="flex items-center justify-center ">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 256 256">
				<path
					d="M232,144a64.07,64.07,0,0,1-64,64H80a8,8,0,0,1,0-16h88a48,48,0,0,0,0-96H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48A8,8,0,0,1,85.66,45.66L51.31,80H168A64.07,64.07,0,0,1,232,144Z">
				</path>
			</svg>
			<p class="pl-1">Kembali</p>
		</div>
	</a>
</div>
@endsection