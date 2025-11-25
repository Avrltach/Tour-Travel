<section class="bg-white dark:bg-gray-900 py-16">
  <div class="py-16 px-6 md:px-12 lg:px-16 mx-auto max-w-screen-xl">

    <div class="max-w-2xl mx-auto text-center mb-12">
      <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
        Pertanyaan Yang Sering Diajukan
      </h2>
      <p class="text-gray-500 dark:text-gray-400">
        Jawaban singkat untuk membantu Anda mengenal layanan kami lebih dekat.
      </p>
    </div>

    <div class="max-w-4xl mx-auto space-y-4">

      <!-- FAQ ITEM 1 -->
      <div class="faq-item border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-6 text-left">
          <span class="text-xl font-semibold text-gray-800 dark:text-white">
            Bagaimana cara memesan paket wisata di Cakrawala Tour?
          </span>
          <svg class="w-8 h-8 arrow transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7  seven" />
          </svg>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-100/50 dark:bg-gray-800/40">
          <p class="p-6 text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
            Anda dapat memesan paket wisata melalui website kami, menghubungi kontak resmi kami,
            atau datang langsung ke kantor kami di Purwokerto. Tim kami siap membantu Anda memilih paket sesuai kebutuhan dan anggaran.
          </p>
        </div>
      </div>

      <!-- FAQ ITEM 2 -->
      <div class="faq-item border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-6 text-left">
          <span class="text-xl font-semibold text-gray-800 dark:text-white">
            Apakah saya bisa menyesuaikan paket perjalanan?
          </span>
          <svg class="w-8 h-8 arrow transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 seven" />
          </svg>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-100/50 dark:bg-gray-800/40">
          <p class="p-6 text-gray-600 dark:text-gray-300 text-lg">
            Tentu, Anda bisa menyesuaikan itinerary, destinasi, waktu keberangkatan, dan fasilitas lainnya.
          </p>
        </div>
      </div>

      <!-- FAQ ITEM 3 -->
      <div class="faq-item border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-6 text-left">
          <span class="text-xl font-semibold text-gray-800 dark:text-white">
            Apa saja metode pembayaran yang tersedia?
          </span>
          <svg class="w-8 h-8 arrow transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 seven" />
          </svg>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-100/50 dark:bg-gray-800/40">
          <p class="p-6 text-gray-600 dark:text-gray-300 text-lg">
            Kami menyediakan pembayaran via transfer bank, e-wallet, dan pembayaran langsung di kantor.
          </p>
        </div>
      </div>

      <!-- FAQ ITEM 4 -->
      <div class="faq-item border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-6 text-left">
          <span class="text-xl font-semibold text-gray-800 dark:text-white">
            Apakah harga paket wisata sudah termasuk semua biaya?
          </span>
          <svg class="w-8 h-8 arrow transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 seven" />
          </svg>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-100/50 dark:bg-gray-800/40">
          <p class="p-6 text-gray-600 dark:text-gray-300 text-lg">
            Ya, sebagian besar paket sudah termasuk transportasi, tiket, makan, dan pemandu wisata.
          </p>
        </div>
      </div>

      <!-- FAQ ITEM 5 -->
      <div class="faq-item border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-6 text-left">
          <span class="text-xl font-semibold text-gray-800 dark:text-white">
            Bagaimana jika saya ingin membatalkan atau mengubah jadwal tour?
          </span>
          <svg class="w-8 h-8 arrow transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 seven" />
          </svg>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-100/50 dark:bg-gray-800/40">
          <p class="p-6 text-gray-600 dark:text-gray-300 text-lg">
            Hubungi tim kami untuk reschedule atau pembatalan sesuai kebijakan yang berlaku.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<script>
  const faqs = document.querySelectorAll(".faq-item");

  faqs.forEach((faq) => {
    const btn = faq.querySelector(".faq-btn");
    const content = faq.querySelector(".faq-content");
    const arrow = faq.querySelector(".arrow");

    btn.addEventListener("click", () => {
      const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

      document.querySelectorAll(".faq-content").forEach((c) => c.style.maxHeight = "0px");
      document.querySelectorAll(".arrow").forEach((a) => a.style.transform = "rotate(0deg)");

      if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + "px";
        arrow.style.transform = "rotate(90deg)";
      }
    });
  });
</script>
