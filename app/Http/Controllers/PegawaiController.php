<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', ['data' => $data]);
    }
    public function create(){
        return view('pegawai.create');
    }
    public function store(Request $request){
        // validate
        $validatedData = $request->validate([
            'nama' => 'required',
            'status' => 'required',
        ]);

        // Create a new Kendaraan instance with the validated data
        $pegawai = Pegawai::create($validatedData);

        // Redirect to the index page or do something else
        return redirect()->route('pegawai.index');

    }
}
