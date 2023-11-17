@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Kendaraan</h2>
            {{-- form tambah data kendaraan --}}
            <form action="{{ route('kendaraan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_kendaraan">Merk Kendaraan</label>
                    <input type="text" class="form-control" id="nama" name="merk">
                </div>
                <div class="form-group">
                    <label for="plat_nomor">Plat Nomor</label>
                    <input type="text" class="form-control" id="plat_nomor" name="plat_nomor">
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="tipe" id="" class="form-control">
                        <option value="">Pilih Jenis</option>
                        <option value="Angkutan Orang">Angkutan Orang</option>
                        <option value="Angkutan Barang">Angkutan Barang</option>
                    </select>
                </div>
                {{-- Perusahaan --}}
                <div class="form-group">
                    <label for="">Perusahaan</label>
                    <select name="perusahaan_id" id="" class="form-control">
                        <option value="">Pilih Perusahaan</option>
                        @foreach ($perusahaan as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div> <!-- .row -->
    @endsection
