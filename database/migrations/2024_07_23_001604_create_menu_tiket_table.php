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
        Schema::create('menu_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tiket');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->enum('status', ['Tersedia', 'Habis']);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_tiket');
    }
};