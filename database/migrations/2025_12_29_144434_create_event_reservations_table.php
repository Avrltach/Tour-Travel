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
        Schema::create('event_reservations', function (Blueprint $table) {
        $table->id();
        $table->enum('event_type', [
            'Company Gathering',
            'Family Gathering',
            'Outing Kantor',
            'Seminar',
            'Workshop',
            'Lainnya'
        ]);
        $table->string('event_name');
        $table->string('institution')->nullable();
        $table->string('greeting')->nullable();
        $table->string('full_name');
        $table->string('whatsapp');
        $table->string('email')->nullable();
        $table->date('event_date');
        $table->time('start_time');
        $table->time('end_time');
        $table->string('event_location');
        $table->string('city')->nullable();
        $table->integer('participants')->nullable();
        $table->string('event_duration')->nullable();
        $table->string('services')->nullable();
        $table->string('concept')->nullable();
        $table->string('budget')->nullable();
        $table->text('notes')->nullable();
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_reservations');
    }
};
