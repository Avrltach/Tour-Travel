@extends('layouts.app')

@section('title', 'Reservasi - Cakrawala')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="max-w-xl mx-auto px-4">
        <div class="flex bg-white rounded-xl shadow p-2 mb-8">
            <button data-tab="tour"
                class="tab-btn flex-1 py-2 rounded-lg text-sm font-semibold
                       text-white"
                style="background: linear-gradient(135deg,#1FE4F9,#0D90E1)">
                Tour Wisata
            </button>
            <button data-tab="event"
                class="tab-btn flex-1 py-2 rounded-lg text-sm font-semibold text-gray-600">
                Event Organizer
            </button>
            <button data-tab="transport"
                class="tab-btn flex-1 py-2 rounded-lg text-sm font-semibold text-gray-600">
                Transportasi
            </button>
        </div>
        <form id="tour"
              action="{{ route('reservasi.tour.store') }}"
              method="POST"
              class="tab-content bg-white rounded-xl shadow p-8 space-y-6">
            @csrf
            <h2 class="text-lg font-semibold">Reservasi Tour Wisata</h2>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg
                              focus:outline-none focus:ring-2 focus:ring-blue-300"
                       name="full_name"
                       placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="email"
                       placeholder="contoh@gmail.com">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Nomor WhatsApp <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="whatsapp"
                       placeholder="+62 812-3456-7890">
            </div>
           <div>
    <label class="block text-sm font-medium mb-1">
        Jenis Perjalanan <span class="text-red-500">*</span>
    </label>
    <select
        name="trip_type"
        required
        class="w-full bg-gray-100 px-4 py-3 rounded-lg
               focus:outline-none focus:ring-2 focus:ring-blue-300">
        <option value="">-- Pilih Jenis Perjalanan --</option>
        <option value="Group Tour">Group Tour</option>
        <option value="Private Tour">Private Tour</option>
        <option value="Study Tour">Study Tour</option>
    </select>
</div>

            <div>
                <label class="block text-sm font-medium mb-1">
                    Lokasi Penjemputan <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="pickup_location"
                       placeholder="Alamat lengkap titik jemput">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Destinasi / Kota Tujuan <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="destination"
                       placeholder="Silakan isi destinasi/kota tujuan">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Jumlah Peserta <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="participants"
                       placeholder="Contoh: 45 Dewasa, 3 Anak">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Tanggal Keberangkatan <span class="text-red-500">*</span>
                </label>
                <input type="date"
                       class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="departure_date">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Waktu Penjemputan <span class="text-red-500">*</span>
                </label>
                <input type="time"
                       class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="pickup_time">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Durasi Tour <span class="text-red-500">*</span>
                </label>
                <input class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                       name="duration"
                       placeholder="Contoh: 3 hari">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">
                    Catatan Tambahan
                </label>
                <textarea rows="4"
                          class="w-full bg-gray-100 px-4 py-3 rounded-lg"
                          name="notes"
                          placeholder="Ketik catatan"></textarea>
            </div>
            <button
                class="w-full py-4 rounded-lg text-white font-semibold"
                style="background: linear-gradient(135deg,#1FE4F9,#0D90E1)">
                Kirim Reservasi
            </button>
        </form>
        <form id="event"
      action="{{ route('reservasi.event.store') }}"
      method="POST"
      class="tab-content hidden bg-white rounded-xl shadow p-8 space-y-6">
@csrf

<h2 class="text-lg font-semibold">Reservasi Event Organizer</h2>

<div>
    <label class="block text-sm font-medium mb-1">Jenis Event *</label>
    <select class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="event_type">
        <option value="">-- Pilih Event --</option>
        <option>Company Gathering</option>
        <option>Family Gathering</option>
        <option>Outing Kantor</option>
        <option>Seminar</option>
        <option>Workshop</option>
        <option>Lainnya</option>
    </select>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Nama Event *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="event_name" placeholder="Masukan nama event">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Instansi</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="institution"placeholder="Masukan nama instansi">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Bagaimana kami menyapa Anda</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="greeting"placeholder="Contoh : Bapak / Ibu">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Nama Penanggung Jawab *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="full_name"placeholder="Nama Lengkap">
</div>

<div>
    <label class="block text-sm font-medium mb-1">WhatsApp *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="whatsapp" placeholder="+62 812-3456-7890">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Email</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="email"placeholder="contoh@gmail.com">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Tanggal Event *</label>
    <input type="date" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="event_date">
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium mb-1">Jam Mulai *</label>
        <input type="time" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="start_time">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Jam Selesai *</label>
        <input type="time" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="end_time">
    </div>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Lokasi Event *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="event_location"placeholder="Masukan Lokasi acara">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Kota / Area</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="city"placeholder="Masukan kota/area acara">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Jumlah Peserta</label>
    <input type="number" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="participants"placeholder="Contoh: 40 Peserta">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Durasi Event</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="event_duration"placeholder="Masukan Durasi Acara">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Layanan Dibutuhkan</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="services"placeholder="Masukan layanan yang dibutuhkan">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Konsep / Tema</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="concept"placeholder="Contoh: Fun Outdoor, Semi Formal">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Estimasi Anggaran</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="budget"placeholder="Contoh: Rp 25.000.000">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Catatan Tambahan</label>
    <textarea rows="4" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="notes"placeholder="ketik catatan"></textarea>
</div>

<button class="w-full py-4 rounded-lg text-white font-semibold"
        style="background: linear-gradient(135deg,#1FE4F9,#0D90E1)">
    Kirim Reservasi 
</button>
</form>

<form id="transport"
      action="{{ route('reservasi.transport.store') }}"
      method="POST"
      class="tab-content hidden bg-white rounded-xl shadow p-8 space-y-6">
@csrf

<h2 class="text-lg font-semibold">Reservasi Transportasi</h2>

<div>
    <label class="block text-sm font-medium mb-1">Jenis Armada *</label>
    <select class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="fleet_type">
        <option value="">-- Pilih Armada --</option>
        <option>Big Bus</option>
        <option>Medium Bus</option>
        <option>Shuttle Bus</option>
        <option>MPV</option>
        <option>Lainnya</option>
    </select>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Jumlah Armada *</label>
    <input type="number" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="fleet_count"placeholder="Contoh: 1 Unit">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Instansi</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="institution"placeholder="Masukan Instansi">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Bagaimana kami menyapa Anda</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="greeting"placeholder="Contoh: Bapak / Ibu">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Nama Lengkap *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="full_name"placeholder="Masukan Nama Lengkap">
</div>

<div>
    <label class="block text-sm font-medium mb-1">WhatsApp *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="whatsapp"placeholder="+62 812-3456-7890">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Email</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="email"placeholder="contoh@gmail.com">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Lokasi Jemput *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="pickup_location"placeholder="Masukan lokasi penjemputan">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Tujuan *</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="destination"placeholder="Masukan lokasi tujuan">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Jumlah Peserta</label>
    <input type="number" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="participants"placeholder="Contoh: 40 Dewasa, 3 Anak">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Tanggal Perjalanan *</label>
    <input type="date" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="travel_date">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Durasi Perjalanan</label>
    <input class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="travel_duration"placeholder="Masukan durasi perjalanan">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Catatan Tambahan</label>
    <textarea rows="4" class="w-full bg-gray-100 px-4 py-3 rounded-lg" name="notes"placeholder="Ketik catatan"></textarea>
</div>

<button class="w-full py-4 rounded-lg text-white font-semibold"
        style="background: linear-gradient(135deg,#1FE4F9,#0D90E1)">
    Kirim Reservasi 
</button>
</form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================
       TAB SWITCHING
    ===================== */
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    function activateTab(tabName) {
        // reset button
        tabButtons.forEach(btn => {
            btn.classList.remove('text-white');
            btn.classList.add('text-gray-600');
            btn.style.background = '';
        });

        // reset content
        tabContents.forEach(c => c.classList.add('hidden'));

        // activate content
        const content = document.getElementById(tabName);
        if (content) content.classList.remove('hidden');

        // activate button
        const button = document.querySelector(`[data-tab="${tabName}"]`);
        if (button) {
            button.classList.add('text-white');
            button.style.background = 'linear-gradient(135deg,#1FE4F9,#0D90E1)';
        }
    }

    tabButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            activateTab(this.dataset.tab);
        });
    });


    @if(session()->has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Reservasi Berhasil 🎉',
            text: {!! json_encode(session('success')) !!},
            confirmButtonText: 'OK',
            confirmButtonColor: '#0D90E1'
        }).then(() => {
            const activeTab = {!! json_encode(session('active_tab')) !!};
            if (activeTab) activateTab(activeTab);
        });
    @endif
});
</script>
@endsection

