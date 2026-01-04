<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tour_reservations', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email')->nullable();
        $table->string('whatsapp');
        $table->enum('trip_type', [
            'Group Tour',
            'Private Tour',
            'Study Tour'
        ]);
        $table->string('pickup_location');
        $table->string('destination');
        $table->integer('participants');
        $table->date('departure_date');
        $table->time('pickup_time');
        $table->string('duration')->nullable();
        $table->text('notes')->nullable();
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_reservations');
    }
};
