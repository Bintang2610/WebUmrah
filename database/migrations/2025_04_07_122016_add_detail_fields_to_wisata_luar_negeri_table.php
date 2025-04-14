<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->string('foto_ktp')->nullable();
            $table->string('jenis_perjalanan')->nullable();
            $table->date('date_of_issued_perjalanan')->nullable();
            $table->decimal('biaya', 15, 2)->nullable();
            $table->date('date_of_expiry_perjalanan')->nullable();
            $table->string('hotel')->nullable();
            $table->string('transportasi')->nullable();
            $table->string('kode_khusus_perjalanan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->dropColumn([
                'foto_ktp',
                'jenis_perjalanan',
                'date_of_issued_perjalanan',
                'biaya',
                'date_of_expiry_perjalanan',
                'hotel',
                'transportasi',
                'kode_khusus_perjalanan'
            ]);
        });
    }
};
