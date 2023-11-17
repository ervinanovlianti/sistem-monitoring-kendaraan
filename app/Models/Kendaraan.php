<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    // agar dapat mengisi tabel
    protected $fillable = [
        'id', 'merk',  'plat_nomor', 'tipe', 'perusahaan_id',
    ];
}
