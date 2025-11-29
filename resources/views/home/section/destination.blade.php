<section class="bg-white dark:bg-gray-900 py-10">
  <div class="max-w-screen-xl mx-auto px-6">
    <div class="max-w-xl mx-auto text-center mb-8">
      <h2 class="mb-4 text-4xl sm:text-4xl font-extrabold text-gray-900 dark:text-white" style="font-family: 'Montserrat', sans-serif;">
        Jelajahi Destinasi
      </h2>
      <p class="text-gray-500 text-base sm:text-lg" style="font-family: 'Montserrat', sans-serif;">
        Dapatkan inspirasi untuk perjalananmu berikutnya di Indonesia. Temukan keindahan alam, budaya, dan pengalaman tak terlupakan.
      </p>
    </div>
    <div class="flex flex-wrap justify-center gap-4 mb-12">
      <button class="filter-btn px-6 py-3 text-sm md:text-base font-semibold rounded-xl border border-white/30 transition duration-300"
              data-category="sedang-tren" style="font-family: 'Montserrat', sans-serif;">
        Sedang Tren
      </button>
      <button class="filter-btn px-6 py-3 text-sm md:text-base font-semibold rounded-xl border border-white/30 transition duration-300"
              data-category="populer" style="font-family: 'Montserrat', sans-serif;">
        Populer
      </button>
      <button class="filter-btn px-6 py-3 text-sm md:text-base font-semibold rounded-xl border border-white/30 transition duration-300"
              data-category="unggulan" style="font-family: 'Montserrat', sans-serif;">
        Unggulan
      </button>
      <button class="filter-btn px-6 py-3 text-sm md:text-base font-semibold rounded-xl border border-white/30 transition duration-300"
              data-category="rekomendasi" style="font-family: 'Montserrat', sans-serif;">
        Rekomendasi
      </button>
    </div>
    <div class="relative overflow-x-auto">
      <div id="carousel" class="flex gap-4 scroll-smooth whitespace-nowrap px-1">
        <div class="flex-shrink-0 w-[calc(33.333%-0.75rem)] h-[430px] relative rounded-lg shadow inline-block">
          <img src="{{ asset('images/lokasi/bali.png') }}" 
               class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105" />
          <div class="absolute bottom-0 w-full p-3 rounded-b-lg" style="background: rgba(0,0,0,0.55); backdrop-blur: 5px;">
            <h3 class="text-lg font-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">BALI</h3>
            <p class="text-sm mb-3 text-white" style="font-family: 'Montserrat', sans-serif;">
              Nikmati pesona pantai, budaya, dan suasana tropis yang menenangkan di Pulau Dewata.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg transition hover:bg-white/40" style="font-family: 'Montserrat', sans-serif; background: rgba(255,255,255,0.25); backdrop-blur: 5px;">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
        <div class="flex-shrink-0 w-[calc(33.333%-0.75rem)] h-[430px] relative rounded-lg shadow inline-block overflow-hidden">
          <img src="{{ asset('images/lokasi/bandung.png') }}" 
               class="w-full h-full object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
          <div class="absolute bottom-0 w-full p-3 rounded-b-lg" style="background: rgba(0,0,0,0.55); backdrop-blur: 5px;">
            <h3 class="text-lg font-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">BANDUNG</h3>
            <p class="text-sm mb-3 text-white" style="font-family: 'Montserrat', sans-serif;">
              Jelajahi keindahan sejarah, budaya, dan kuliner khas di jantung kebudayaan Jawa Barat.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg transition hover:bg-white/40" style="font-family: 'Montserrat', sans-serif; background: rgba(255,255,255,0.25); backdrop-blur: 5px;">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
        <div class="flex-shrink-0 w-[calc(33.333%-0.75rem)] h-[430px] relative rounded-lg shadow inline-block overflow-hidden">
          <img src="{{ asset('images/lokasi/malang.png') }}" 
               class="w-full h-full object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
          <div class="absolute bottom-0 w-full p-3 rounded-b-lg" style="background: rgba(0,0,0,0.55); backdrop-blur: 5px;">
            <h3 class="text-lg font-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">MALANG</h3>
            <p class="text-sm mb-3 text-white" style="font-family: 'Montserrat', sans-serif;">
              Jelajahi keindahan sejarah, budaya, dan kuliner khas di jantung kebudayaan Jawa Timur.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg transition hover:bg-white/40" style="font-family: 'Montserrat', sans-serif; background: rgba(255,255,255,0.25); backdrop-blur: 5px;">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
        <div class="flex-shrink-0 w-[calc(33.333%-0.75rem)] h-[430px] relative rounded-lg shadow inline-block overflow-hidden">
          <img src="{{ asset('images/lokasi/jogja.png') }}" 
               class="w-full h-full object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
          <div class="absolute bottom-0 w-full p-3 rounded-b-lg" style="background: rgba(0,0,0,0.55); backdrop-blur: 5px;">
            <h3 class="text-lg font-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">Yogyakarta</h3>
            <p class="text-sm mb-3 text-white" style="font-family: 'Montserrat', sans-serif;">
              Jelajahi keindahan sejarah, budaya, dan kuliner khas di jantung kebudayaan Jawa Timur.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg transition hover:bg-white/40" style="font-family: 'Montserrat', sans-serif; background: rgba(255,255,255,0.25); backdrop-blur: 5px;">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
        <div class="flex-shrink-0 w-[calc(33.333%-0.75rem)] h-[430px] relative rounded-lg shadow inline-block overflow-hidden">
          <img src="{{ asset('images/lokasi/jakarta.png') }}" 
               class="w-full h-full object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
          <div class="absolute bottom-0 w-full p-3 rounded-b-lg" style="background: rgba(0,0,0,0.55); backdrop-blur: 5px;">
            <h3 class="text-lg font-bold text-white mb-1" style="font-family: 'Montserrat', sans-serif;">Jakarta</h3>
            <p class="text-sm mb-3 text-white" style="font-family: 'Montserrat', sans-serif;">
              Jelajahi keindahan sejarah, budaya, dan kuliner khas di jantung kebudayaan Jawa Timur.
            </p>
            <button class="w-full py-2 text-white font-semibold rounded-lg transition hover:bg-white/40" style="font-family: 'Montserrat', sans-serif; background: rgba(255,255,255,0.25); backdrop-blur: 5px;">
              Lihat Selengkapnya
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  const buttons = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('#carousel > div');
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.dataset.category;
      buttons.forEach(b => {
        b.classList.remove('text-white');
        b.style.background = null;
        b.classList.add('bg-gray-200/20', 'text-gray-500', 'border-white/30'); 
      });
      btn.classList.add('text-white');
      btn.classList.remove('bg-gray-200/20', 'text-gray-500', 'border-white/30');
      btn.style.background = 'linear-gradient(to right, #1FE4F9, #085E95)';
      cards.forEach(card => {
        if(category === 'all') {
          card.style.display = 'flex';
        } else {
          card.style.display = card.dataset.category.includes(category) ? 'flex' : 'none';
        }
      });
    });
  });
</script>
