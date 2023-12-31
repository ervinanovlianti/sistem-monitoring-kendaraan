<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = Kendaraan::all();

        return view('kendaraan.index', ['data' => $data]);
    }
    public function create()
    {
        $perusahaan = DB::table('perusahaan')->get();

        return view('kendaraan.create', [
            'perusahaan' => $perusahaan
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'plat_nomor' => 'required',
            'tipe' => 'required',
            'perusahaan_id' => 'required',
        ]);
        $kendaraan = Kendaraan::create($validatedData);

        return redirect()->route('kendaraan.index');
    }
    // detail_kendaraa
    public function detail($id)
    {
        $kendaraan = Kendaraan::find($id);
        $bbm = DB::table('bbm')->join('kendaraan', 'kendaraan.id', '=', 'bbm.kendaraan_id')->get();
        $jadwalService = DB::table('jadwal_service')->join('kendaraan', 'kendaraan.id', '=', 'jadwal_service.kendaraan_id')->get();
        $riwayatPemakaian = DB::table('riwayat_penggunaan_kendaraan')->join('kendaraan', 'kendaraan.id', '=', 'riwayat_penggunaan_kendaraan.kendaraan_id')->join('pegawai', 'pegawai.id', '=', 'riwayat_penggunaan_kendaraan.pegawai_id')->get();
        return view('kendaraan.detail', [
            'kendaraan' => $kendaraan,
            'bbm' => $bbm,
            'jadwalService' => $jadwalService,
            'riwayatPemakaian' => $riwayatPemakaian
        ]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
