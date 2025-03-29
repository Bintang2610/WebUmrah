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
        Schema::create('wisata_domestik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('nik', 20)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('foto_peserta');
            $table->enum('jenis_hubungan', ['Keluarga', 'Suami-istri']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata_domestik');
    }
};
