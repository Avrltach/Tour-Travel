@extends('layouts.app')

@section('title', 'Package - Cakrawala')

@section('content')
@include('package.section.hero')

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
                    <img
                        id="image"
                        src="/default.jpg"
                        class="w-full h-80 object-cover"
                        alt="Package Image"
                    >

                    <div class="p-6 space-y-4">
                        <h1 id="name" class="text-2xl font-bold"></h1>

                        <!-- DURATION & LOCATION -->
                        <div class="flex flex-wrap gap-6 text-sm text-gray-500">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icon/clock.png') }}" class="w-4 h-4">
                                <span id="duration"></span>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icon/navigasi.png') }}" class="w-4 h-4">
                                <span id="location"></span>
                            </div>
                        </div>

                        <p id="description" class="text-gray-600 leading-relaxed"></p>
                    </div>
                </div>

                <!-- FASILITAS -->
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Fasilitas & Layanan</h2>
                    <ul
                        id="facility"
                        class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-3 text-gray-600 text-sm"
                    ></ul>
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
                            <img src="{{ asset('icon/bag1.png') }}" class="w-4 h-4">
                            Tersedia setiap hari
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icon/cek.png') }}" class="w-4 h-4">
                            Pembayaran DP tersedia
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icon/cek.png') }}" class="w-4 h-4">
                            Gratis konsultasi
                        </div>
                    </div>

                    <a
                        href="#"
                        id="wa-button"
                        style="background: linear-gradient(135deg, #1FE4F9, #0D90E1);"
                        class="block text-center mt-6 px-6 py-3 text-white rounded-lg font-semibold transition hover:opacity-90"
                    >
                        Reservasi Sekarang
                    </a>

                    <div
                        class="mt-4 rounded-lg p-4 text-xs text-gray-800 leading-relaxed"
                        style="background-color: rgba(31, 228, 249, 0.5);"
                    >
                        <strong>Sistem DP tersedia!</strong><br>
                        Anda dapat membayar DP 25%–50%.
                        Pelunasan maksimal 3 hari sebelum keberangkatan.
                    </div>
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

            /* =========================
               ✅ FIX GAMBAR (SAMA DENGAN LIST)
            ========================== */
            const image = document.getElementById("image");
            image.src = data.url ?? "/default.jpg";

            document.getElementById("name").textContent = data.name_package;
            document.getElementById("description").textContent = data.description;
            document.getElementById("duration").textContent = data.duration;
            document.getElementById("location").textContent = data.location;
            document.getElementById("price").textContent = formatRupiah(data.price);

            // FASILITAS
            const facilityList = document.getElementById("facility");
            facilityList.innerHTML = "";

            if (data.facility) {
                data.facility.split(",").forEach(item => {
                facilityList.innerHTML += `
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('icon/cek.png') }}" class="w-4 h-4 mt-0.5">
                        <span>${item.trim()}</span>
                    </li>
                `;
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
@include('package.section.whatsapp', ['packageId' => $id])
