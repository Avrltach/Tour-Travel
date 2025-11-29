<section class="bg-white dark:bg-gray-900 py-16">
  <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-16">
    <div class="text-center mb-12 max-w-2xl mx-auto">
      <h2 class="text-4xl font-extrabold mb-6 text-gray-900 dark:text-white" style="font-family: 'Montserrat', sans-serif;">
        Apa Kata Pelanggan Kami
      </h2>
      <p class="text-gray-500 sm:text-lg leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
        Lihat beberapa cerita nyata dari pelanggan yang telah menjelajah bersama kami.
      </p>
    </div>
    <div id="testimonialCarousel" 
         class="flex gap-6 overflow-x-auto scrollbar-hidden scroll-smooth py-4">
    </div>
  </div>
</section>
<script>
const testimonials = [
  { name: "Maria Fransiska Saweho", text: "Pilihan yang tepat untuk teman perjalanan dan pariwisata.", img: "https://randomuser.me/api/portraits/women/44.jpg" },
  { name: "Bukseri Tuti", text: "Tim sangat profesional, ramah, dan membuat perjalanan nyaman.", img: "https://randomuser.me/api/portraits/women/68.jpg" },
  { name: "Dewi Kristina", text: "Atrasiknya bagus, guide santai, perjalanan sangat menyenangkan.", img: "https://randomuser.me/api/portraits/women/22.jpg" },
  { name: "Ahmad Rizal", text: "Perjalanan yang sangat berkesan, pelayanan ramah dan responsif.", img: "https://randomuser.me/api/portraits/men/21.jpg" },
  { name: "Siti Rahmawati", text: "Rekomendasi banget! Jadwal rapi dan perjalanan aman.", img: "https://randomuser.me/api/portraits/women/11.jpg" },
  { name: "Budi Santoso", text: "Harga terjangkau, kualitas layanan premium!", img: "https://randomuser.me/api/portraits/men/33.jpg" }
];

function renderTestimonials() {
  const container = document.getElementById("testimonialCarousel");
  container.innerHTML = "";

  testimonials.forEach(t => {
    const card = document.createElement("div");
    card.className = `
      bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-md p-6 text-center
      w-72 h-70 flex-shrink-0 transition-transform duration-300 hover:scale-105
      flex flex-col justify-between
    `;
    card.innerHTML = `
      <div>
        <div class="text-yellow-500 mb-3 text-lg" style="font-family: 'Montserrat', sans-serif;">★★★★★</div>
        <p class="text-gray-600 dark:text-gray-300 mb-4" style="font-family: 'Montserrat', sans-serif;">${t.text}</p>
      </div>
      <div class="flex items-center justify-center gap-3 mt-2">
        <img src="${t.img}" class="w-10 h-10 rounded-full object-cover">
        <span class="font-semibold text-gray-800 dark:text-white" style="font-family: 'Montserrat', sans-serif;">${t.name}</span>
      </div>
    `;
    container.appendChild(card);
  });
}
renderTestimonials();
</script>
