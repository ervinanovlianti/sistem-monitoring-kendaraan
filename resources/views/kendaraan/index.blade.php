@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Kendaraan</h2>
            <p></p>
            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3" type="button">Add New</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Jenis</th>
                                        <th>Nomor Plat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- menampilkan data dari controller kendaraan --}}
                                    @foreach ($data as $kendaraan)
                                        <tr>
                                            <td>{{ $kendaraan->id }}</td>
                                            <td>{{ $kendaraan->nama_kendaraan }}</td>
                                            <td>{{ $kendaraan->jenis }}</td>
                                            <td>{{ $kendaraan->plat_nomor }}</td>
                                            {{-- <td>{{ $kendaraan->perusahaan }}</td> --}}
                                            <td><span class="badge badge-pill badge-info">Tersedia</span></td>
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
