<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JamaahHaji extends Model
{
    use HasFactory;

    protected $table = 'jamaah_haji';

    protected $fillable = [
        'nama_peserta', 'nik', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'foto_peserta', 'no_paspor', 'issuing_office',
        'date_of_issued', 'date_of_expiry', 'jenis_hubungan'
    ];
}
