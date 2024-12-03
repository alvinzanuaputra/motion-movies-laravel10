<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Forbidden</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-extrabold text-red-600">403</h1>
        <p class="text-xl font-semibold mt-4 text-white">Maaf, Anda tidak memiliki akses ke halaman ini!</p>
        <p class="text-xl font-semibold mt-4 text-white">Halaman ini privasi</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md hover:scale-95 duration-500 transition-all">
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
