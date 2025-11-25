<section class="bg-white dark:bg-gray-900">
  <div class="py-16 px-6 md:px-12 lg:px-16 mx-auto max-w-screen-xl">
    <!-- Judul dan Deskripsi -->
    <div class="max-w-2xl mx-auto text-center mb-12">
      <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
        Jelajahi Destinasi
      </h2>
      <p class="text-gray-500 sm:text-lg leading-relaxed">
        Dapatkan inspirasi untuk perjalananmu berikutnya di Indonesia. Temukan 
        keindahan alam, budaya, dan pengalaman tak terlupakan di setiap destinasi.
      </p>
    </div>

    <!-- Button Filter -->
    <div class="flex flex-wrap gap-4 justify-left mb-12">
      <button class="filter-btn px-8 py-3 font-semibold rounded-full text-white border border-transparent transition duration-300"
              data-category="all" style="background: linear-gradient(to right, #1FE4F9, #085E95);">
        Destinasi Terpopuler
      </button>
      <button class="filter-btn px-8 py-3 bg-gray-200/20 text-gray-500 font-semibold rounded-full border border-white/30 hover:bg-gray-200/40 transition duration-300"
              data-category="sedang-tren">
        Sedang Tren
      </button>
      <button class="filter-btn px-8 py-3 bg-gray-200/20 text-gray-500 font-semibold rounded-full border border-white/30 hover:bg-gray-200/40 transition duration-300"
              data-category="populer">
        Populer
      </button>
      <button class="filter-btn px-8 py-3 bg-gray-200/20 text-gray-500 font-semibold rounded-full border border-white/30 hover:bg-gray-200/40 transition duration-300"
              data-category="unggulan">
        Unggulan
      </button>
      <button class="filter-btn px-8 py-3 bg-gray-200/20 text-gray-500 font-semibold rounded-full border border-white/30 hover:bg-gray-200/40 transition duration-300"
              data-category="rekomendasi">
        Rekomendasi
      </button>
    </div>

    <!-- Carousel Destinasi -->
    <div class="relative">
      <!-- Tombol kiri -->
      <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 p-2 bg-black/50 text-white rounded-full hover:bg-black/60">
        &lt;
      </button>

      <!-- Scrollable grid -->
      <div id="carousel" class="flex gap-6 overflow-x-auto scrollbar-hide scroll-smooth">
        <!-- Bali -->
        <div class="flex-shrink-0 w-[400px] h-[533px] relative rounded-lg shadow-lg" 
             data-category="all populer sedang-tren">
          <img src="{{ asset('images/lokasi/bali.png') }}" alt="Bali" class="w-full h-full object-cover rounded-lg">
          <div class="absolute bottom-0 w-full bg-black/50 text-white p-4 rounded-b-lg">
            <h3 class="font-bold text-2xl mb-2">BALI</h3>
            <p class="text-sm mb-4">
              Nikmati pesona pantai, budaya, dan suasana tropis yang menenangkan di Pulau Dewata.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg" style="background: rgba(247, 249, 254, 0.4);">
              Lihat Selengkapnya
            </button>
          </div>
        </div>

        <!-- Malang -->
        <div class="flex-shrink-0 w-[400px] h-[533px] relative rounded-lg shadow-lg" 
             data-category="all sedang-tren">
          <img src="{{ asset('images/lokasi/malang.png') }}" alt="Malang" class="w-full h-full object-cover rounded-lg">
          <div class="absolute bottom-0 w-full bg-black/50 text-white p-4 rounded-b-lg">
            <h3 class="font-bold text-2xl mb-2">MALANG</h3>
            <p class="text-sm mb-4">
              Nikmati kesejukan kota, pegunungan, dan wisata alam yang menenangkan di Malang.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg" style="background: rgba(247, 249, 254, 0.4);">
              Lihat Selengkapnya
            </button>
          </div>
        </div>

        <!-- Yogyakarta -->
        <div class="flex-shrink-0 w-[400px] h-[533px] relative rounded-lg shadow-lg" 
             data-category="all unggulan">
          <img src="{{ asset('images/lokasi/jogja.png') }}" alt="Yogyakarta" class="w-full h-full object-cover rounded-lg">
          <div class="absolute bottom-0 w-full bg-black/50 text-white p-4 rounded-b-lg">
            <h3 class="font-bold text-2xl mb-2">YOGYAKARTA</h3>
            <p class="text-sm mb-4">
              Jelajahi keindahan sejarah, budaya, dan kuliner khas di jantung kebudayaan Jawa.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg" style="background: rgba(247, 249, 254, 0.4);">
              Lihat Selengkapnya
            </button>
          </div>
        </div>

        <!-- Bandung -->
        <div class="flex-shrink-0 w-[400px] h-[533px] relative rounded-lg shadow-lg" 
             data-category="all unggulan">
          <img src="{{ asset('images/lokasi/bandung.png') }}" alt="Bandung" class="w-full h-full object-cover rounded-lg">
          <div class="absolute bottom-0 w-full bg-black/50 text-white p-4 rounded-b-lg">
            <h3 class="font-bold text-2xl mb-2">BANDUNG</h3>
            <p class="text-sm mb-4">
              Temukan kesejukan alam pegunungan, wisata belanja, dan kuliner hits di Kota Kembang.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg" style="background: rgba(247, 249, 254, 0.4);">
              Lihat Selengkapnya
            </button>
          </div>
        </div>

        <!-- Jakarta -->
        <div class="flex-shrink-0 w-[400px] h-[533px] relative rounded-lg shadow-lg" 
             data-category="all rekomendasi">
          <img src="{{ asset('images/lokasi/jakarta.png') }}" alt="Jakarta" class="w-full h-full object-cover rounded-lg">
          <div class="absolute bottom-0 w-full bg-black/50 text-white p-4 rounded-b-lg">
            <h3 class="font-bold text-2xl mb-2">JAKARTA</h3>
            <p class="text-sm mb-4">
              Eksplorasi pusat kota, wisata modern, kuliner, dan hiburan di Ibukota Indonesia.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg" style="background: rgba(247, 249, 254, 0.4);">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
      </div>

      <!-- Tombol kanan -->
      <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 p-2 bg-black/50 text-white rounded-full hover:bg-black/60">
        &gt;
      </button>
    </div>
  </div>
</section>

<script>
  // Tombol filter
  const buttons = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('#carousel > div');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.dataset.category;

      // 1. Reset styling semua tombol
      buttons.forEach(b => {
        // Hapus styling tombol aktif
        b.classList.remove('text-white');
        b.style.background = null; // Menghapus inline style gradient yang aktif

        // Tambahkan kembali styling tombol non-aktif (default)
        b.classList.remove('bg-gray-200/20', 'text-gray-500', 'border-white/30');
        b.classList.add('bg-gray-200/20', 'text-gray-500', 'border-white/30'); 
      });

      // 2. Terapkan styling tombol yang diklik (aktif)
      btn.classList.add('text-white');
      btn.classList.remove('bg-gray-200/20', 'text-gray-500', 'border-white/30'); // Hapus styling non-aktif
      // Terapkan kembali gradient yang spesifik untuk tombol aktif
      btn.style.background = 'linear-gradient(to right, #1FE4F9, #085E95)';


      // filter kartu
      cards.forEach(card => {
        if(category === 'all') {
          card.style.display = 'flex';
        } else {
          card.style.display = card.dataset.category.includes(category) ? 'flex' : 'none';
        }
      });
    });
  });

  // Carousel scroll
  const carousel = document.getElementById('carousel');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  prevBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: -440, behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: 440, behavior: 'smooth' });
  });
</script>