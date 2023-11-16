<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai_tabel';
    // agar dapat mengisi tabel
    protected $fillable = [
        'nama', 'status',
    ];

    
}
