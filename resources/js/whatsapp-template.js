function generateWhatsAppMessage(data) {
    return `
Halo Admin Cakrawala,

Saya berminat melakukan reservasi paket wisata dengan detail sebagai berikut:

Nama Paket      : ${data.name_package}
Lokasi Tujuan   : ${data.location}
Durasi Perjalanan: ${data.duration}
Harga Paket     : ${data.price}

Deskripsi Paket:
${data.description}

Mohon informasinya.
Terima kasih.

Hormat saya,
Calon Peserta
`;
}
