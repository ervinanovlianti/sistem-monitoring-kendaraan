<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        // $data = DB::table('pesanan_tabel')
        // ->join('kendaraan_tabel', 'kendaraan_tabel.id', '=', 'pesanan_tabel.kendaraan_id')
        // ->join('pegawai_tabel', 'pegawai_tabel.id','=','pesanan_tabel.pegawai_id', 'pegawai_tabel.id', '=', 'pesanan_tabel.atasan_id')
        // ->get();
        // buatlah relasi antara table pesanan dengan table kendaraan dan tabel pegawai dimana pada tabel pegawai berelasi dengan dirinya sendiri dan pada tabel pesanan berelasi dengan tabel kendaraan
        $data = DB::table('pesanan_tabel')
            ->join('kendaraan_tabel', 'kendaraan_tabel.id', '=', 'pesanan_tabel.kendaraan_id')
            ->join('pegawai_tabel as pegawai', 'pegawai.id', '=', 'pesanan_tabel.pegawai_id')
            ->leftJoin('pegawai_tabel as atasan', 'atasan.id', '=', 'pegawai.atasan_id')
            ->select(
                'pesanan_tabel.*',
                'kendaraan_tabel.*',
                'pegawai.id as id_pegawai',
                'pegawai.nama as nama_pegawai',
                'atasan.nama as nama_atasan'
            )
            ->get();


        return view('pesanan.index', ['data' => $data]);
    }
    public function create()
    {
        // mengambil data kendaraan dari tabel
        $kendaraan = DB::table('kendaraan_tabel')->get();
        $pegawai = DB::table('pegawai_tabel')->where('status', '=', 'Karyawan')->get();
        $atasan = DB::table('pegawai_tabel')->where('status', '=', 'Kepala Divisi')->get();

        return view('pesanan.create', ['kendaraan' => $kendaraan, 'pegawai' => $pegawai, 'atasan' => $atasan]);
    }
    public function store(Request $request)
    {

        // validate
        $validatedData = $request->validate([
            'kendaraan_id' => 'required',
            'pegawai_id' => 'required',
            'atasan_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'status_pesanan' => 'required',
        ]);
        Pesanan::create($validatedData);
        // jika berhasil berikan alert success
        echo "<script>alert('Success!');</script>";
        // jika eror berikan alert error
        echo "<script>alert('Error!');</script>";
        return redirect()->route('pesanan.index');
    }
    public function action(){
        $data = DB::table('pesanan_tabel')
            ->join('kendaraan_tabel', 'kendaraan_tabel.id', '=', 'pesanan_tabel.kendaraan_id')
            ->join('pegawai_tabel', 'pegawai_tabel.id', '=', 'pesanan_tabel.pegawai_id')
            ->get();
        return view('pesanan.persetujuan', ['data' => $data]);
    }
    public function persetujuan($id)
    {
        // mengambil data pesanan berdasarkan id
        // mengubah status pesanan menjadi disetujui
        $pesanan = Pesanan::find($id);

        // mengubah status pesanan menjadi disetujui
        $pesanan->status_pesanan = 'disetujui';
        $pesanan->save();

        // jika berhasil redirect ke halaman pesanan
        return redirect()->route('pesanan.index');
    }
}
