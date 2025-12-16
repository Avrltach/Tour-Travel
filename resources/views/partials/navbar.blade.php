<nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-white shadow-md font-sans">
  <div class="max-w-screen-xl mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center gap-2">
        <img class="h-8 w-auto" src="{{ asset('images/cakrawala.png') }}" alt="Cakrawala Logo">
        <span class="text-lg font-semibold text-gray-900" style="font-family: 'Montserrat', sans-serif;">Cakrawala</span>
      </a>
      <ul class="hidden lg:flex items-center gap-8">
        <li><a href="{{ route('home') }}" class="text-sm font-medium text-gray-900 hover:text-primary-500" style="font-family: 'Montserrat', sans-serif;">Beranda</a></li>
        <li><a href="{{ route('about') }}" class="text-sm font-medium text-gray-900 hover:text-primary-500" style="font-family: 'Montserrat', sans-serif;">Tentang Kami</a></li>
        <li><a href="{{ route('package') }}" class="text-sm font-medium text-gray-900 hover:text-primary-500" style="font-family: 'Montserrat', sans-serif;">Paket Wisata</a></li>
        <li><a href="{{ route('gallery') }}" class="text-sm font-medium text-gray-900 hover:text-primary-500" style="font-family: 'Montserrat', sans-serif;">Galeri</a></li>
        <li><a href="{{ route('contact') }}" class="text-sm font-medium text-gray-900 hover:text-primary-500" style="font-family: 'Montserrat', sans-serif;">Kontak</a></li>
        <li>
          <a href=""
            class="inline-flex items-center justify-center
                    px-5 py-2
                    text-sm font-medium text-white
                    rounded-md
                    shadow-sm
                    hover:opacity-90 transition"
            style="background: linear-gradient(135deg, #1FE4F9, #0D90E1);
                    font-family: 'Montserrat', sans-serif;">
            Pesanan
          </a>
        </li>


      </ul>
      <button data-collapse-toggle="nav-menu" class="lg:hidden p-2 text-gray-900">
        <svg class="w-6 h-6" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16m0 6H4" />
        </svg>
      </button>

    </div>
    <div id="nav-menu" class="hidden mt-4 border border-gray-300 rounded-lg bg-white p-4 lg:hidden">
      <ul class="space-y-3 text-gray-900">
        <li><a href="{{ route('home') }}" style="font-family: 'Montserrat', sans-serif;">Beranda</a></li>
        <li><a href="{{ route('about') }}" style="font-family: 'Montserrat', sans-serif;">Tentang Kami</a></li>
        <li><a href="{{ route('package') }}" style="font-family: 'Montserrat', sans-serif;">Paket Wisata</a></li>
        <li><a href="{{ route('gallery') }}" style="font-family: 'Montserrat', sans-serif;">Galeri</a></li>
        <li><a href="{{ route('contact') }}" style="font-family: 'Montserrat', sans-serif;">Kontak</a></li>
        <li>
          <a href=""
            class="inline-flex items-center justify-center
                    px-5 py-2
                    text-sm font-medium text-white
                    rounded-md
                    shadow-sm
                    hover:opacity-90 transition"
            style="background: linear-gradient(135deg, #1FE4F9, #0D90E1);
                    font-family: 'Montserrat', sans-serif;">
            Pesanan
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
