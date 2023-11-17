<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $data = DB::table('pesanan')
            ->join('kendaraan', 'kendaraan.id', '=', 'pesanan.kendaraan_id')
            ->join('pegawai as pegawai', 'pegawai.id', '=', 'pesanan.pegawai_id')
            ->leftJoin('pegawai as atasan', 'atasan.id', '=', 'pegawai.atasan_id')
            ->select(
                'pesanan.*',
                'kendaraan.*',
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
        $kendaraan = DB::table('kendaraan')->get();
        $pegawai = DB::table('pegawai')->where('jabatan', '=', 'Karyawan')->get();
        $atasan = DB::table('pegawai')->where('jabatan', '=', 'Kepala Divisi')->get();
        $perusahaan = DB::table('perusahaan')->get();

        return view(
            'pesanan.create',
            [
                'kendaraan' => $kendaraan,
                'pegawai' => $pegawai,
                'atasan' => $atasan,
                'perusahaan' => $perusahaan
            ]
        );
    }
    public function store(Request $request)
    {
        // validate
        $validatedData = $request->validate([
            'kendaraan_id' => 'required',
            'pegawai_id' => 'required',
            'atasan_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'status' => 'required',
        ]);
        Pesanan::create($validatedData);
        // jika berhasil berikan alert success
        echo "<script>alert('Success!');</script>";
        // jika eror berikan alert error
        echo "<script>alert('Error!');</script>";
        return redirect()->route('pesanan.index');
    }
    public function action()
    {

        $data = DB::table('pesanan')
            ->join('kendaraan', 'kendaraan.id', '=', 'pesanan.kendaraan_id')
            ->join('pegawai', 'pegawai.id', '=', 'pesanan.pegawai_id')
            ->select('pesanan.id as id_pesanan', 'pesanan.*', 'kendaraan.*', 'pegawai.*')
            ->get();
        return view('pesanan.persetujuan', ['data' => $data]);
    }
    public function persetujuanPertama($id)
    {
        $pesanan = Pesanan::find($id);

        if (!$pesanan) {
            return redirect()->route('pesanan.index')->with('error', 'Pesanan tidak ditemukan.');
        }

        $pesanan->status = 'Diteruskan';
        $pesanan->atasan_id = 1;
        $pesanan->save();

        return redirect()->route('pesanan.action')->with('success', 'Pesanan disetujui di kantor cabang.');
    }
    public function persetujuanKedua($id)
    {
        $pesanan = Pesanan::find($id);

        if (!$pesanan) {
            return redirect()->route('pesanan.index')->with('error', 'Pesanan tidak ditemukan.');
        }

        $pesanan->status = 'Disetujui';
        $pesanan->atasan_id = 1;
        $pesanan->save();

        return redirect()->route('pesanan.action')->with('success', 'Pesanan disetujui di kantor pusat.');
    }
    public function dashboard()
    {
        return view('dashboard2');
    }
}
