<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        // menampilkan data dari model kendaraan
        $data = Kendaraan::all();

        // Pass the data to the view
        return view('kendaraan.index', ['data' => $data]);
    }
    // input data kendaraan
    public function create()
    {
        // Return the view for creating a new kendaraan
        return view('kendaraan.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_kendaraan' => 'required',
            'jenis' => 'required',
            'plat_nomor' => 'required',
            'status' => 'required',
        ]);

        // Create a new Kendaraan instance with the validated data
        $kendaraan = Kendaraan::create($validatedData);

        // Redirect to the index page or do something else
        return redirect()->route('kendaraan.index');
    }
}
