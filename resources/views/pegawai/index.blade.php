@extends('layout.main')
@section('content')
        <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Pegawai</h2>
            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Status Pegawai</th>
                                        <th>Atasan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $pegawai)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pegawai->nama_pegawai }}</td>
                                            <td>{{ $pegawai->jabatan }}</td>
                                            <td>{{ $pegawai->nama_atasan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- simple table -->
                
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection