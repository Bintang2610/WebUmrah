<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('jamaah_umrah', function (Blueprint $table) {
            $table->string('foto_ktp');
            $table->string('jenis_perjalanan');
            $table->date('date_of_issued_perjalanan')->nullable();
            $table->decimal('biaya', 15, 2);
            $table->date('date_of_expiry_perjalanan')->nullable();
            $table->string('hotel');
            $table->string('transportasi');
            $table->string('kode_khusus_perjalanan');
            $table->text('catatan');
            $table->string('foto_catatan');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telepon', 20);
        });
    }

    public function down(): void
    {
        Schema::table('jamaah_umrah', function (Blueprint $table) {
            $table->dropColumn([
                 'foto_ktp','jenis_perjalanan', 'date_of_issued_perjalanan',
                'biaya', 'date_of_expiry_perjalanan', 'hotel', 'transportasi',
                'kode_khusus_perjalanan', 'catatan', 'foto_catatan', 'username', 'email', 'password', 'no_telepon'
            ]);
        });
    }
};

