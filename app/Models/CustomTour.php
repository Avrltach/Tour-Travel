<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomTour extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap','email','no_wa','jenis_perjalanan','lokasi_penjemputan',
        'destinasi','jumlah_peserta','tanggal_berangkat','waktu_penjemputan',
        'durasi_tour','catatan','status'
    ];
}
