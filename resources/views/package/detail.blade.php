@extends('layouts.app')

@section('title', 'Package - Cakrawala')

@section('content')
    @include('package/section/hero')
   <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6">

        <!-- LOADING -->
        <div id="loading" class="text-center py-12 text-gray-500">
            Memuat detail paket...
        </div>

        <!-- ERROR -->
        <div id="error" class="hidden text-center py-12 text-red-500">
            Gagal memuat data paket.
        </div>

        <!-- DETAIL -->
        <div id="package-detail" class="hidden grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- KIRI -->
            <div class="lg:col-span-2 space-y-8">

                <!-- CARD UTAMA -->
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img id="image" class="w-full h-80 object-cover">

                    <div class="p-6 space-y-4">
                        <h1 id="name" class="text-2xl font-bold"></h1>

                        <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                            <span id="duration"></span>
                            <span id="location"></span>
                        </div>

                        <p id="description" class="text-gray-600 leading-relaxed"></p>
                    </div>
                </div>

                <!-- FASILITAS -->
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Fasilitas & Layanan</h2>
                    <ul id="facility" class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-600 text-sm"></ul>
                </div>

                <!-- RENCANA PERJALANAN (STATIC DULU) -->
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Rencana Perjalanan</h2>

                    <div class="space-y-3 text-sm text-gray-600">
                        <p>Hari 1: Keberangkatan & destinasi utama</p>
                        <p>Hari 2: Wisata lanjutan</p>
                        <p>Hari 3: Oleh-oleh & kembali</p>
                    </div>
                </div>
            </div>

            <!-- KANAN -->
            <div class="space-y-6">

                <!-- CARD HARGA -->
                <div class="bg-white rounded-xl shadow p-6 sticky top-24">
                    <p class="text-sm text-gray-500">Harga Paket</p>
                    <p id="price" class="text-3xl font-bold text-blue-600"></p>
                    <p class="text-sm text-gray-500 mt-1">per paket</p>

                    <div class="mt-6 space-y-3 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            ✅ Tersedia setiap hari
                        </div>
                        <div class="flex items-center gap-2">
                            ✅ Pembayaran DP tersedia
                        </div>
                        <div class="flex items-center gap-2">
                            ✅ Gratis konsultasi
                        </div>
                    </div>

                    <a href="#"
                       class="block text-center mt-6 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold">
                        Reservasi Sekarang
                    </a>

                    <p class="text-xs text-gray-500 mt-4 leading-relaxed">
                        Sistem DP tersedia. Anda dapat membayar DP 25%–50%.
                        Pelunasan maksimal 3 hari sebelum keberangkatan.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const id = "{{ $id }}";
    const API_URL = `{{ url('/api/packages') }}/${id}`;

    const loading = document.getElementById("loading");
    const error = document.getElementById("error");
    const detail = document.getElementById("package-detail");

    const formatRupiah = (number) =>
        new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        }).format(number);

    fetch(API_URL)
        .then(res => res.json())
        .then(res => {
            loading.classList.add("hidden");

            const data = res.data;

            document.getElementById("image").src =
                data.url_path ?? "/default.jpg";

            document.getElementById("name").textContent = data.name_package;
            document.getElementById("description").textContent = data.description;
            document.getElementById("duration").textContent = `⏱ ${data.duration}`;
            document.getElementById("location").textContent = `📍 ${data.location}`;
            document.getElementById("price").textContent = formatRupiah(data.price);

            // Facility (string → array)
            const facilityList = document.getElementById("facility");
            facilityList.innerHTML = "";

            if (data.facility) {
                data.facility.split(',').forEach(item => {
                    facilityList.innerHTML += `
                        <li class="flex items-center gap-2">
                            ✅ ${item.trim()}
                        </li>`;
                });
            }

            detail.classList.remove("hidden");
        })
        .catch(err => {
            loading.classList.add("hidden");
            error.classList.remove("hidden");
            console.error(err);
        });
});
</script>

@endsection
