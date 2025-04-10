<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wisata_domestik', function (Blueprint $table) {
            $table->string('jenis_perjalanan');
            $table->string('biaya');
            $table->string('hotel');
            $table->date('date_of_issued_perjalanan')->nullable();
            $table->date('date_of_expiry_perjalanan')->nullable();
            $table->string('transportasi');
            $table->string('kode_khusus_perjalanan');

            $table->text('catatan');
            $table->string('foto_catatan');

            $table->string('username', 255);
            $table->string('password');
            $table->string('no_telepon', 20);
            $table->string('email', 255);
        });
    }

    public function down(): void
    {
        Schema::table('wisata_domestik', function (Blueprint $table) {
            $table->dropColumn([
                'jenis_perjalanan',
                'biaya',
                'hotel',
                'date_of_issued_perjalanan',
                'date_of_expiry_perjalanan',
                'transportasi',
                'kode_khusus_perjalanan',
                'catatan',
                'foto_catatan',
                'username',
                'password',
                'no_telepon',
                'email',
            ]);
        });
    }
};
