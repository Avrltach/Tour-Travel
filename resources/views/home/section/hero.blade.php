<section 
    class="relative bg-cover bg-center bg-no-repeat min-h-screen 
           flex items-center py-24 sm:py-32"
    style="background-image: 
           linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
           url('{{ asset('images/header.png') }}');">

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-white w-full md:w-2/3 lg:w-1/2 font-sans">

            <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl 
                       font-bold leading-tight mb-6">
                Recharge your <br> 
                soul by exploring <br> 
                destinations with us
            </h1>

            <p class="text-base sm:text-lg md:text-xl 
                      font-medium text-gray-200 mb-8 leading-relaxed">
                Jelajahi website kami untuk menemukan destinasi luar biasa,</br>
                 penawaran terbaik, dan perjalanan tak terlupakan berikutnya.</br>
                  Mulailah merencanakan liburan impianmu hari ini!
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#packages"
                class="px-6 py-2 sm:px-8 sm:py-5 text-white font-semibold rounded-full transition"
                style="background: linear-gradient(135deg, #1FE4F9, #0D90E1);">
                    Lihat Paket Wisata
                </a>
                <a href="{{ route('contact') }}"
                class="px-6 py-2 sm:px-8 sm:py-5 text-white font-semibold rounded-full transition"
                style="background: linear-gradient(135deg, #1FE4F9, #0D90E1);">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
