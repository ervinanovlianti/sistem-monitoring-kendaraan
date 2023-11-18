@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Pesanan Kendaraan</h2>
            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tgl. Pemesanan</th>
                                        <th>Nama Kendaraan</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Supir</th>
                                        <th>Persetujuan</th>
                                        <th>Status Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $pesanan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pesanan->tanggal_pemesanan }}</td>
                                            <td>{{ $pesanan->merk }}</td>
                                            <td>{{ $pesanan->tipe }}</td>
                                            <td>{{ $pesanan->nama_pegawai }}</td>
                                            <td>{{ $pesanan->nama_atasan }}</td>
                                            <td>
                                                @if ($pesanan->status == 'Menunggu Konfirmasi')
                                                    <span class="badge badge-pill badge-info">{{ $pesanan->status }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-success  text-white">{{ $pesanan->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($pesanan->status == 'Disetujui' && Auth::user()->hak_akses == 'admin')
                                                    {{-- <a href="{{ route('pesanan.sewa', ['id' => $pesanan->id_pesanan]) }}"
                                                        class="btn btn-primary">Mulai</a> --}}
                                                @endif
                                            </td>
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
