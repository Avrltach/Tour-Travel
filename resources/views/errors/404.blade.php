<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Halaman Tidak Ditemukan</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1FE4F9, #0D90E1);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center px-6">

    <div class="max-w-xl text-center">
        <!-- Icon / Illustration -->
        <div class="mx-auto mb-6 w-24 h-24 rounded-full gradient-bg flex items-center justify-center shadow-lg">
            <span class="text-white text-4xl font-bold">404</span>
        </div>

        <!-- Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Halaman Tidak Ditemukan
        </h1>

        <!-- Description -->
        <p class="text-gray-500 text-lg leading-relaxed mb-8">
            Ups! Sepertinya halaman yang kamu cari tidak tersedia atau telah dipindahkan.
            Jangan khawatir, kamu masih bisa menjelajahi destinasi menarik lainnya bersama kami.
        </p>

        <!-- Action -->
        <a href="{{ url('/') }}"
           class="inline-flex items-center px-8 py-4 rounded-full text-white font-semibold
                  gradient-bg shadow-lg transition duration-300 hover:scale-105 hover:shadow-2xl">
            Kembali ke Beranda
        </a>
    </div>

</body>
</html>
