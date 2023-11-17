<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $perusahaan = DB::table('perusahaan')->get();
        return view('data.index', [
            'perusahaan' => $perusahaan
        ]);
    }
    // menampilkan data dari tabel tambang berdasarkan id perusahaan
    public function showTambang($id)
    {
        $kantor = DB::table('kantor')->where('perusahaan_id', $id)->get();
        $tambang = DB::table('tambang')->where('perusahaan_id', $id)->get();
        return view('data.tambang', [
            'tambang' => $tambang,
            'kantor' => $kantor
        ]);
    }
    public function monitoring()
    {
        $bbm = DB::table('bbm')->join('kendaraan', 'kendaraan.id', '=', 'bbm.kendaraan_id')->get();
        $jadwalService = DB::table('jadwal_service')->join('kendaraan', 'kendaraan.id', '=', 'jadwal_service.kendaraan_id')->get();
        $riwayatPemakaian = DB::table('riwayat_penggunaan_kendaraan')->join('kendaraan', 'kendaraan.id', '=', 'riwayat_penggunaan_kendaraan.kendaraan_id')->join('pegawai', 'pegawai.id', '=', 'riwayat_penggunaan_kendaraan.pegawai_id')->get();

        return view('data.konsumsiBBM', [
            'bbm' => $bbm,
            'jadwalService' => $jadwalService,
            'riwayatPemakaian' => $riwayatPemakaian
        ]);
    }
}
