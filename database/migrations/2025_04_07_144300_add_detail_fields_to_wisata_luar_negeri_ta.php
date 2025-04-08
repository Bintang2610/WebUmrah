<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->date('date_of_issued_perjalanan')->nullable();
            $table->decimal('biaya', 15, 2);
            $table->date('date_of_expiry_perjalanan')->nullable();
            $table->string('hotel');
            $table->string('transportasi');
            $table->string('kode_khusus_perjalanan');
            $table->text('catatan'); // teks
            $table->string('foto_catatan'); // foto jika ada
        });
    }

    public function down(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->dropColumn([
                 'date_of_issued_perjalanan',
                'biaya', 'date_of_expiry_perjalanan', 'hotel', 'transportasi',
                'kode_khusus_perjalanan', 'catatan', 'foto_catatan'
            ]);
        });
    }
};

