<section class="bg-white dark:bg-gray-900 py-16">
    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-16">

        <!-- Title -->
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <h2 class="text-4xl font-extrabold mb-6 text-gray-900 dark:text-white">
                Apa Kata Pelanggan Kami
            </h2>
            <p class="text-gray-500 sm:text-lg leading-relaxed">
                View beberapa cerita nyata dari pelanggan yang telah menjelajah bersama kami.
            </p>
        </div>

        <!-- Carousel Wrapper -->
        <div class="relative flex items-center justify-center">

            <!-- Prev Button -->
            <button id="prevTesti"
                class="absolute left-0 z-20 p-3 bg-gray-200/60 hover:bg-gray-300 rounded-full">
                &#10094;
            </button>

            <!-- Cards Container -->
            <div id="testimonialCarousel" class="flex items-center justify-center gap-6 transition-all">
                <!-- Cards loaded by JS -->
            </div>

            <!-- Next Button -->
            <button id="nextTesti"
                class="absolute right-0 z-20 p-3 bg-gray-200/60 hover:bg-gray-300 rounded-full">
                &#10095;
            </button>

        </div>
    </div>
</section>

<script>
    const testimonials = [
        {
            name: "Maria Fransiska Saweho",
            text: "Pilihan yang tepat untuk teman perjalanan dan pariwisata.",
            img: "https://randomuser.me/api/portraits/women/44.jpg"
        },
        {
            name: "Bukseri Tuti",
            text: "Tim sangat profesional, ramah, dan membuat perjalanan nyaman.",
            img: "https://randomuser.me/api/portraits/women/68.jpg"
        },
        {
            name: "Dewi Kristina",
            text: "Atrasiknya bagus, guide santai, perjalanan sangat menyenangkan.",
            img: "https://randomuser.me/api/portraits/women/22.jpg"
        },
        {
            name: "Ahmad Rizal",
            text: "Perjalanan yang sangat berkesan, pelayanan ramah dan responsif.",
            img: "https://randomuser.me/api/portraits/men/21.jpg"
        },
        {
            name: "Siti Rahmawati",
            text: "Rekomendasi banget! Jadwal rapi dan perjalanan aman.",
            img: "https://randomuser.me/api/portraits/women/11.jpg"
        },
        {
            name: "Budi Santoso",
            text: "Harga terjangkau, kualitas layanan premium!",
            img: "https://randomuser.me/api/portraits/men/33.jpg"
        }
    ];

    let current = 0;

    function renderTestimonials() {
        const container = document.getElementById("testimonialCarousel");
        container.innerHTML = "";

        const left = (current - 1 + testimonials.length) % testimonials.length;
        const center = current;
        const right = (current + 1) % testimonials.length;

        const order = [left, center, right];

        order.forEach((i) => {
            const t = testimonials[i];

            const card = document.createElement("div");
            card.className = `
                bg-gray-100 dark:bg-gray-800 rounded-2xl shadow-md p-6 text-center
                w-80 transition-all duration-300
            `;

            card.innerHTML = `
                <div class="text-yellow-500 mb-3">★★★★★</div>
                <p class="text-gray-600 dark:text-gray-300 mb-4">${t.text}</p>
                <div class="flex items-center justify-center gap-3">
                    <img src="${t.img}" class="w-10 h-10 rounded-full object-cover">
                    <span class="font-semibold text-gray-800 dark:text-white">${t.name}</span>
                </div>
            `;

            container.appendChild(card);
        });
    }

    document.getElementById("nextTesti").addEventListener("click", () => {
        current = (current + 1) % testimonials.length;
        renderTestimonials();
    });

    document.getElementById("prevTesti").addEventListener("click", () => {
        current = (current - 1 + testimonials.length) % testimonials.length;
        renderTestimonials();
    });

    renderTestimonials();
</script>
