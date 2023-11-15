<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan_tabel';
    // agar dapat mengisi tabel
    protected $fillable = [
        'id', 'jenis', 'plat_nomor', 'konsumsi_bbm', 'jadwal_service', 'status'
    ];
}
