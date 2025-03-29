<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WisataDomestik extends Model
{
    use HasFactory;

    protected $table = 'wisata_domestik';

    protected $fillable = [
        'nama_peserta', 'nik', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'foto_peserta', 'jenis_hubungan'
    ];
}
