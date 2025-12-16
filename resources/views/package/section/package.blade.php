<section class="bg-gray-50 dark:bg-gray-900 py-16">
    <div class="py-4 px-4 md:px-12 lg:px-16 mx-auto max-w-screen-xl">
        <div class="mb-8">
        <div class="w-full bg-white shadow-lg rounded-xl p-5">
            <div class="flex items-center gap-4">
                <div class="flex items-center w-full relative">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 text-gray-500"></i>
                    <input 
                        type="text" 
                        placeholder="Cari paket wisata"
                        class="w-full pl-10 pr-4 py-3 bg-gray-100 rounded-lg 
                            focus:outline-none focus:ring-2 focus:ring-blue-300"
                    >
                </div>
                <i class="fa-solid fa-filter text-gray-500"></i>
                <div class="flex items-center gap-2 bg-gray-100 px-4 py-3 rounded-lg">
                    <select 
                        class="bg-gray-100 focus:outline-none text-gray-700"
                    >
                        <option value="">Filter Berdasarkan</option>
                    </select>
                </div>
            </div>
        </div>
        </div>
        <div id="loading" class="text-center py-12">
            <div class="animate-spin inline-block">
                 <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                   <circle cx="12" cy="12" r="10" stroke-width="4" class="opacity-25"></circle>
                   <path fill="currentColor" class="opacity-75" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                 </svg>
            </div>
            <p class="text-gray-500 mt-2">Memuat paket wisata...</p>
        </div>
        <div id="error" class="hidden text-center py-12">
            <p class="text-red-500 font-medium">Gagal memuat paket wisata.</p>
        </div>
        <div id="tour-packages-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"></div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const packagesGrid = document.getElementById("tour-packages-grid");
    const loading      = document.getElementById("loading");
    const error        = document.getElementById("error");

    const API_URL = "{{ url('/api/packages') }}";
    const GRADIENT_STYLE = "background: linear-gradient(135deg, #1FE4F9, #0D90E1);";

    const formatRupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0,
        }).format(parseFloat(number));
    };

    const renderTourPackageCard = (pkg) => {
        const price = formatRupiah(pkg.price);
        const desc = pkg.description
            ? pkg.description.substring(0, 80) + "..."
            : "Deskripsi tidak tersedia.";

        const detailUrl = `{{ url('/packages') }}/${pkg.id}`;
        const imageUrl = pkg.url && pkg.url !== "" ? pkg.url : "/default.jpg";

        return `
            <div class="package-card bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="relative h-48">
                    <img src="${imageUrl}" alt="${pkg.name_package}" class="w-full h-full object-cover">
                    <span style="${GRADIENT_STYLE}"
                          class="absolute top-3 right-3 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md">
                        ${pkg.duration}
                    </span>
                </div>

                <div class="p-4 space-y-2">
                    <h3 class="text-lg font-bold text-gray-900">${pkg.name_package}</h3>
                    <p class="text-sm text-gray-500 line-clamp-2">${desc}</p>

                    <div class="flex items-center justify-between pt-2">
                        <div>
                            <span class="text-sm text-gray-500 block">Mulai dari</span>
                            <span class="text-xl font-bold text-blue-600">${price}</span>
                        </div>

                        <a href="${detailUrl}"
                           style="${GRADIENT_STYLE}"
                           class="px-4 py-2 text-sm font-medium text-white rounded-lg hover:opacity-90 transition duration-150 shadow-md">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        `;
    };

    fetch(API_URL)
        .then(res => res.json())
        .then(res => {
            loading.classList.add("hidden");

            // gunakan res.data karena API wrap resource
            const packages = res.data;
            if (!packages || packages.length === 0) {
                error.textContent = "Belum ada paket wisata tersedia.";
                error.classList.remove("hidden");
                return;
            }

            packagesGrid.innerHTML = packages
                .map(pkg => renderTourPackageCard(pkg))
                .join("");
        })
        .catch(err => {
            loading.classList.add("hidden");
            error.textContent = "Gagal memuat data dari API.";
            error.classList.remove("hidden");
            console.error(err);
        });
});
</script>
