<section class="bg-gray-50 dark:bg-gray-900 py-16">
    <div class="py-4 px-4 md:px-12 lg:px-16 mx-auto max-w-screen-xl">

        <!-- SEARCH & FILTER -->
        <div class="mb-4">
            <div class="w-full bg-white shadow-lg rounded-xl p-5">
                <div class="flex items-center gap-4 relative">

                    <!-- Search -->
                    <div class="flex items-center w-full relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 text-gray-500"></i>
                        <input 
                            type="text" 
                            id="searchInput"
                            placeholder="Cari paket wisata"
                            class="w-full pl-10 pr-4 py-3 bg-gray-100 rounded-lg 
                                   focus:outline-none focus:ring-2 focus:ring-blue-300"
                        />
                    </div>

                    <!-- Filter Button -->
                    <div class="relative">
                        <button id="filterBtn"
                            class="flex items-center gap-2 bg-gray-100 px-4 py-3 rounded-lg 
                                   hover:bg-gray-200 whitespace-nowrap">
                            <span class="text-gray-700 text-sm">Filter Berdasarkan</span>
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>

                        <!-- Dropdown -->
                        <div id="filterDropdown"
                            class="hidden absolute right-0 mt-3 w-72 bg-white rounded-xl shadow-xl p-4 z-50">

                            <!-- Jenis Paket -->
                            <div class="mb-4">
                                <h4 class="font-semibold mb-2">Jenis Paket</h4>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-type" value="Umum"> Umum
                                </label>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-type" value="Sekolah"> Sekolah
                                </label>
                            </div>

                            <!-- Durasi -->
                            <div class="mb-4">
                                <h4 class="font-semibold mb-2">Durasi</h4>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-duration" value="one night">
                                    One Night
                                </label>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-duration" value="two day one night">
                                    Two Day One Night
                                </label>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-duration" value="three day two night">
                                    Three Day Two Night
                                </label>
                            </div>

                            <!-- Harga -->
                            <div>
                                <h4 class="font-semibold mb-2">Harga</h4>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-price" value="0-500000">
                                    &lt; Rp 500.000
                                </label>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-price" value="500000-1000000">
                                    Rp 500.000 - Rp 1.000.000
                                </label>
                                <label class="flex gap-2 text-sm">
                                    <input type="checkbox" class="filter-price" value="1000000-2000000">
                                    Rp 1.000.000 - Rp 2.000.000
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- ACTIVE FILTERS -->
        <div class="mb-6">
            <div id="activeFilters"
                class="flex flex-wrap gap-2"></div>
        </div>

        <!-- LOADING -->
        <div id="loading" class="text-center py-12">
            <p class="text-gray-500">Memuat paket wisata...</p>
        </div>

        <!-- ERROR -->
        <div id="error" class="hidden text-center py-12">
            <p class="text-red-500 font-medium">Gagal memuat paket wisata.</p>
        </div>

        <!-- GRID -->
        <div id="tour-packages-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"></div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const packagesGrid = document.getElementById("tour-packages-grid");
    const loading = document.getElementById("loading");
    const error = document.getElementById("error");
    const searchInput = document.getElementById("searchInput");
    const filterBtn = document.getElementById("filterBtn");
    const filterDropdown = document.getElementById("filterDropdown");
    const activeFiltersContainer = document.getElementById("activeFilters");

    const API_URL = "{{ url('/api/packages') }}";
    const GRADIENT_STYLE = "background: linear-gradient(135deg, #1FE4F9, #0D90E1);";

    let allPackages = [];

    /* Toggle dropdown */
    filterBtn.addEventListener("click", () => {
        filterDropdown.classList.toggle("hidden");
    });

    document.addEventListener("click", (e) => {
        if (!filterBtn.contains(e.target) && !filterDropdown.contains(e.target)) {
            filterDropdown.classList.add("hidden");
        }
    });

    const formatRupiah = (number) =>
        new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        }).format(number);

    const renderTourPackageCard = (pkg) => `
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
            <div class="relative h-48">
                <img src="${pkg.url || '/default.jpg'}"
                     class="w-full h-full object-cover">
                <span style="${GRADIENT_STYLE}"
                      class="absolute top-3 right-3 text-white text-xs px-3 py-1 rounded-full">
                    ${pkg.duration}
                </span>
            </div>
            <div class="p-4 space-y-2">
                <h3 class="text-lg font-bold">${pkg.name_package}</h3>
                <p class="text-sm text-gray-500 line-clamp-2">
                    ${pkg.description?.substring(0,80) || "Deskripsi tidak tersedia"}...
                </p>
                <div class="flex justify-between items-center pt-2">
<span
    class="text-xl font-bold"
    style="
        background: linear-gradient(135deg, #1FE4F9, #0D90E1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    "
>
    ${formatRupiah(pkg.price)}
</span>
                    <a href="{{ url('/packages') }}/${pkg.id}"
                       style="${GRADIENT_STYLE}"
                       class="px-4 py-2 text-sm text-white rounded-lg">
                        Detail
                    </a>
                </div>
            </div>
        </div>
    `;

    const renderPackages = (packages) => {
        if (!packages.length) {
            packagesGrid.innerHTML =
                `<p class="col-span-full text-center text-gray-500">
                    Paket tidak ditemukan
                </p>`;
            return;
        }
        packagesGrid.innerHTML = packages.map(renderTourPackageCard).join("");
    };

    /* RENDER ACTIVE FILTER CHIPS */
    const renderActiveFilters = () => {
        activeFiltersContainer.innerHTML = "";

        document.querySelectorAll(
            ".filter-type:checked, .filter-duration:checked, .filter-price:checked"
        ).forEach(input => {
            const label = input.parentElement.textContent.trim();

            const chip = document.createElement("span");
            chip.className =
                "flex items-center gap-2 px-3 py-1 text-sm rounded-full " +
                "border border-blue-400 text-blue-600 bg-blue-50";

            chip.innerHTML = `
                ${label}
                <button class="font-bold hover:text-red-500">&times;</button>
            `;

            chip.querySelector("button").onclick = () => {
                input.checked = false;
                applyFilter();
            };

            activeFiltersContainer.appendChild(chip);
        });
    };

    /* SEARCH & FILTER */
    const applyFilter = () => {
        const keyword = searchInput.value.toLowerCase();

        const types = [...document.querySelectorAll(".filter-type:checked")]
            .map(e => e.value.toLowerCase());

        const durations = [...document.querySelectorAll(".filter-duration:checked")]
            .map(e => e.value.toLowerCase());

        const prices = [...document.querySelectorAll(".filter-price:checked")]
            .map(e => e.value);

        const filtered = allPackages.filter(pkg => {
            return (
                (!keyword || pkg.name_package.toLowerCase().includes(keyword)) &&
                (!types.length || types.includes(pkg.type?.toLowerCase())) &&
                (!durations.length || durations.some(d =>
                    pkg.duration?.toLowerCase().includes(d)
                )) &&
                (!prices.length || prices.some(r => {
                    const [min, max] = r.split("-").map(Number);
                    return pkg.price >= min && pkg.price <= max;
                }))
            );
        });

        renderPackages(filtered);
        renderActiveFilters();
    };

    searchInput.addEventListener("input", applyFilter);
    document.querySelectorAll(".filter-type, .filter-duration, .filter-price")
        .forEach(el => el.addEventListener("change", applyFilter));

    /* FETCH DATA */
    fetch(API_URL)
        .then(res => res.json())
        .then(res => {
            loading.classList.add("hidden");
            allPackages = res.data || [];
            renderPackages(allPackages);
        })
        .catch(() => {
            loading.classList.add("hidden");
            error.classList.remove("hidden");
        });
});
</script>
