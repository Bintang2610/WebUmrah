<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('wisata_domestik', function (Blueprint $table) {
        $table->string('foto_ktp')->nullable()->after('foto_peserta');
    });
}

    public function down()
    {
        Schema::table('wisata_domestik', function (Blueprint $table) {
            $table->dropColumn('foto_ktp');
        });
    }

};
