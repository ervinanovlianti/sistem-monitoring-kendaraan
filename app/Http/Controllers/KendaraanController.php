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
        return view('kendaraan.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kendaraan' => 'required',
            'jenis' => 'required',
            'plat_nomor' => 'required',
            'status' => 'required',
        ]);
        $kendaraan = Kendaraan::create($validatedData);

        return redirect()->route('kendaraan.index');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
