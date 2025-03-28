<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataLuarNegeri extends Model
{
    use HasFactory;

    protected $table = 'wisata_luar_negeri';

    protected $fillable = [
        'nama_peserta',
        'foto_diri',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_paspor',
        'issuing_office',
        'date_of_issued',
        'date_of_expiry',
        'jenis_hubungan'
    ];
}
