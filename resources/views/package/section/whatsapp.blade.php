<script>
document.addEventListener("DOMContentLoaded", () => {

    const ADMIN_WA = "6282220671237";
    const PACKAGE_ID = "{{ $packageId }}";
    const API_URL = `{{ url('/api/packages') }}/${PACKAGE_ID}`;

    const formatRupiah = (number) =>
        new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        }).format(number);

    fetch(API_URL)
        .then(res => res.json())
        .then(res => {
            const data = res.data;

            const waButton = document.getElementById("wa-button");
            if (!waButton) return;

            waButton.addEventListener("click", (e) => {
                e.preventDefault();

                const message = `
Halo Admin Cakrawala,

Saya tertarik untuk melakukan reservasi paket wisata dengan detail berikut:

Nama Paket       : ${data.name_package}
Lokasi Tujuan    : ${data.location}
Durasi Perjalanan: ${data.duration}
Harga Paket      : ${formatRupiah(data.price)}

Mohon informasi terkait ketersediaan jadwal, sistem DP, dan prosedur reservasi selanjutnya.

Terima kasih.
                `;

                const waUrl = `https://wa.me/${ADMIN_WA}?text=${encodeURIComponent(message)}`;
                window.open(waUrl, "_blank");
            });
        })
        .catch(err => console.error("WA Script Error:", err));
});
</script>
