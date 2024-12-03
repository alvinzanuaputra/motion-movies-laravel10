<?php
$link = $movie->link;
$videoId = substr(parse_url($link, PHP_URL_QUERY), 2);
$embedUrl = "https://www.youtube.com/embed/$videoId";
?>
@extends('master')
@section('content')
<div class="container mx-auto p-6 bg-gray-900 text-gray-200">
	<div class="aspect-w-16 aspect-h-9 mb-6 rounded border border-black">
		<iframe width="100%" height="720" class="w-full h-[300px] lg:h-[620px] embed-responsive-item" src="{{ $embedUrl }}"></iframe>
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
	<a href="./"
		class="inline-block mt-6 bg-gray-700 hover:bg-gray-600 text-gray-200 text-sm px-4 py-2 rounded">&lt;&lt;
		Kembali</a>
</div>
@endsection