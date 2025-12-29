<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('custom_tours', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_wa');
            $table->enum('jenis_perjalanan', ['group','private','study']);
            $table->string('lokasi_penjemputan');
            $table->string('destinasi');
            $table->integer('jumlah_peserta');
            $table->date('tanggal_berangkat');
            $table->time('waktu_penjemputan');
            $table->string('durasi_tour');
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending','diproses','selesai'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('custom_tours');
    }
};
