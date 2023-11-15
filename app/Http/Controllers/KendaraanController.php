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
        return view('dataKendaraan', ['data' => $data]);
        }

}
