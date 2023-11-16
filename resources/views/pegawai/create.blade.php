@extends('layout.main')
@section('content')
        <div class="row justify-content-center">
        <div class="col-12">
            <h2>Tambah Pegawai</h2>
                {{-- form tambah data pegawai --}}
                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Status Pegawai</label>
                        <select name="status" id="" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Kepala Divisi">Kepala Divisi</option>
                            <option value="Kepala Cabang">Kepala Cabang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection