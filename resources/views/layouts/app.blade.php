<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cakrawala Travel')</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js" defer></script>

    <style>
    body {
        font-family: 'Manrope', sans-serif;
    }
    .gradient-border-button {
        color: #0D90E1; 
        background-clip: padding-box;
        border: 3px solid transparent; 
        border-radius: 9999px; 
        position: relative;
        z-index: 1; 
        transition: all 0.3s ease;
    }
    .gradient-border-button:before {
        content: '';
        position: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        z-index: -1;
        margin: -3px; 
        border-radius: inherit; 
        background: linear-gradient(135deg, #1FE4F9, #0D90E1); 
    }
    
    .gradient-bg {
        background: linear-gradient(135deg, #1FE4F9, #0D90E1);
    }
</style>
</head>
<body class="bg-white text-gray-900">
    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')

    <a href="https://wa.me/6289506050112" target="_blank"
       class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full flex items-center justify-center
              shadow-lg transform transition duration-300 hover:scale-110 hover:shadow-2xl overflow-hidden"
       title="Chat WhatsApp">
        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-full h-full object-cover">
    </a>
</body>
</html>
