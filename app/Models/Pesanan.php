<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    
    protected $table = 'pesanan';
    protected $fillable = [
        'kendaraan_id', 'pegawai_id','atasan_id', 'tanggal_pemesanan', 'status',
    ];

}
