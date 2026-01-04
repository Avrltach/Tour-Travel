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
       Schema::create('transport_reservations', function (Blueprint $table) {
        $table->id();
        $table->enum('fleet_type', [
            'Big Bus',
            'Medium Bus',
            'Shuttle Bus',
            'MPV',
            'Lainnya'
        ]);
        $table->integer('fleet_count');
        $table->string('institution')->nullable();
        $table->string('greeting')->nullable();
        $table->string('full_name');
        $table->string('whatsapp');
        $table->string('email')->nullable();
        $table->string('pickup_location');
        $table->string('destination');
        $table->integer('participants')->nullable();
        $table->date('travel_date');
        $table->string('travel_duration')->nullable();
        $table->text('notes')->nullable();
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_reservations');
    }
};
