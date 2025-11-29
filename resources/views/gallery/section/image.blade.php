<section class="bg-white dark:bg-gray-900 py-10" style="font-family: 'Montserrat', sans-serif;">
  <div class="py-16 px-6 md:px-12 lg:px-16 mx-auto max-w-screen-xl">
    
    <div class="text-left mb-10">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 dark:text-white">
        Semua Kenangan Perjalanan Wisata
      </h2>
    </div>
    <div id="gallery-grid" class="space-y-10"></div>
    <div id="loading" class="text-center py-12">
      <div class="animate-spin inline-block">
        <svg class="w-10 h-10 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" stroke-width="4" class="opacity-25"></circle>
          <path fill="currentColor" class="opacity-75"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
      </div>
    </div>
    <div id="error" class="hidden text-center py-12">
      <p class="text-red-500 font-medium">Gagal memuat galeri.</p>
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

      let index = 0;
      const patterns = [
        ["big", "vertical", "big"],
        ["single", "single", "single"],
        ["vertical", "vertical", "big"],
      ];
      let patternIndex = 0;

      while (index < images.length) {
        const row = document.createElement("div");
        row.className = "grid grid-cols-1 md:grid-cols-3 gap-6";
        const pattern = patterns[patternIndex];
        patternIndex = (patternIndex + 1) % patterns.length;
        pattern.forEach(type => {
          const col = document.createElement("div");
          col.className = "flex flex-col gap-4";
          if (type === "big" && images[index]) {
            col.innerHTML = `
              <img src="${images[index].url}" 
                   class="w-full h-72 md:h-80 object-cover rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300"
                   loading="lazy"> `;
            index++;
          }
          if (type === "single" && images[index]) {
            col.innerHTML = `
              <img src="${images[index].url}"
                   class="w-full h-64 md:h-72 object-cover rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300"
                   loading="lazy"> `;
            index++;
          }
          if (type === "vertical") {
            for (let k = 0; k < 2; k++) {
              if (!images[index]) break;
              const img = document.createElement("img");
              img.src = images[index].url;
              img.loading = "lazy";
              img.className = "w-full h-36 md:h-40 object-cover rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300";
              col.appendChild(img);
              index++;
            }
          }
          row.appendChild(col);
        });
        galleryGrid.appendChild(row);
      }
    })
    .catch(() => {
      loading.classList.add("hidden");
      error.classList.remove("hidden");
    });
});
</script>
