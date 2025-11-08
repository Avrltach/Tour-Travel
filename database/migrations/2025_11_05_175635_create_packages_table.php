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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name_package');
            $table->enum('category', ['sekolah', 'umum', 'tk'])->default('umum'); 
            $table->string('image')->nullable();
            $table->string('location');
            $table->decimal('price',12, 2);
            $table->string('duration');
            $table->text('description')->nullable();
            $table->text('facility')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
