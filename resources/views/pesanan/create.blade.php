@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Tambah Pesanan</h2>
            <form action="{{ route('pesanan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Pemesanan Untuk Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_pemesanan">
                </div>
                <div class="form-group">
                    <label for="">Kendaraan</label>
                    {{-- <input type="text" name="kendaraan_id" id="" value="1"> --}}
                    <select name="kendaraan_id" id="" class="form-control">
                        <option value="">Pilih Kendaraan</option>
                        @foreach ($kendaraan as $k)
                            <option value="{{ $k->id }}">{{ $k->merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Supir</label>
                    {{-- <input type="text" name="pegawai_id" id="" value="1"> --}}
                    <select name="pegawai_id" id="" class="form-control">
                        <option value="">Pilih Supir</option>
                        @foreach ($pegawai as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Atasan</label>
                    {{-- <input type="text" name="pegawai_id" id="" value="1"> --}}
                    <select name="atasan_id" id="" class="form-control">
                        <option value="">Pilih Atasan</option>
                        @foreach ($atasan as $a)
                            <option value="{{ $a->id }}">{{ $a->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="status" value="Menunggu Persetujuan 1">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div> 
    </div>
@endsection
