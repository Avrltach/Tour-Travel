<section class="bg-white dark:bg-gray-900 py-10">
  <div class="py-16 px-6 md:px-12 lg:px-16 mx-auto max-w-screen-xl">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white">
        Galeri Cakrawala Tour
      </h2>
      <p class="text-gray-600 dark:text-gray-400 max-w-xl mx-auto">
        Temukan momen terbaik dari setiap perjalanan bersama Cakrawala Tour. Lihat bagaimana 
        setiap destinasi menyimpan cerita, keindahan, dan kenangan yang tak terlupakan.
      </p>
    </div>

    <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4"></div>

    <div id="loading" class="text-center py-12">
      <div class="animate-spin inline-block">
        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" stroke-width="4" class="opacity-25"></circle>
          <path fill="currentColor" class="opacity-75"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
      </div>
    </div>

    <div id="error" class="hidden text-center py-12">
      <p class="text-red-500">Gagal memuat galeri.</p>
    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const galleryGrid = document.getElementById("gallery-grid");
  const loading = document.getElementById("loading");
  const error = document.getElementById("error");

  fetch("{{ url('/api/images') }}")
    .then(res => res.json())
    .then(res => {
      loading.classList.add("hidden");
      const images = res.data;
      if (!images || images.length === 0) return error.classList.remove("hidden");

      // Render semua gambar langsung ke grid
      images.forEach(imgData => {
        const img = document.createElement("img");
        img.src = imgData.url;
        img.loading = "lazy";
        img.className = "w-full h-40 object-cover rounded-xl shadow";
        galleryGrid.appendChild(img);
      });
    })
    .catch(() => {
      loading.classList.add("hidden");
      error.classList.remove("hidden");
    });
});
</script>
