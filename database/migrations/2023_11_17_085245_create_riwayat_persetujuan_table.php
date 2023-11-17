<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_persetujuan', function (Blueprint $table) {
            $table->id();
            // pesanan_id
            $table->foreignId('pesanan_id')->constrained('pesanan');
            $table->foreignId('disetujui_oleh')->constrained('pegawai');
            $table->date('tanggal_disetujui');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_persetujuan');
    }
};
