<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    use HasFactory;

    protected $table = 'admin_login'; // Tambahkan ini

    protected $fillable = [
        'username',
        'password',
    ];
}
