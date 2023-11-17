<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = DB::table('pegawai')
            ->leftJoin('pegawai as atasan', 'atasan.id', '=', 'pegawai.atasan_id')
            ->select(
                'pegawai.*',
                'pegawai.id as id_pegawai',
                'pegawai.nama as nama_pegawai',
                'atasan.nama as nama_atasan'
            )
            ->get();
        return view('pegawai.index', ['data' => $data]);
    }
    public function create()
    {
        return view('pegawai.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
        $pegawai = Pegawai::create($validatedData);
        echo "<script>alert('Success!');</script>";
        echo "<script>alert('Error!');</script>";
        return redirect()->route('pegawai.index');
    }
}
