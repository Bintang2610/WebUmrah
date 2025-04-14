<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telepon', 20);
        });
    }

    public function down(): void
    {
        Schema::table('wisata_luar_negeri', function (Blueprint $table) {
            $table->dropColumn(['username', 'email', 'password', 'no_telepon']);
        });
    }
};
