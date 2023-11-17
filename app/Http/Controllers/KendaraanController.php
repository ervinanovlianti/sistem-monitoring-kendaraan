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
    public function dashboard()
    {
        return view('dashboard');
    }
}
