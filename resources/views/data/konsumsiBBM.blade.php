@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Konsumsi BBM</h2>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kendaraan</th>
                                        <th>Tipe</th>
                                        <th>Jumlah (Liter/Hari)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($bbm as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->merk }}</td>
                                            <td>{{ $p->tipe }}</td>
                                            <td>{{ $p->jumlah }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <h2 class="page-title">Jadwal Service</h2>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kendaraan</th>
                                        <th>Tipe</th>
                                        <th>Tanggal Service (Hari)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($jadwalService as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->merk }}</td>
                                            <td>{{ $p->tipe }}</td>
                                            <td>{{ $p->tanggal_service }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <h2 class="page-title">Riwayat Pemakaian</h2>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kendaraan</th>
                                        <th>Tipe</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($riwayatPemakaian as $p)
                                        <tr>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->merk }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->tanggal_mulai }}</td>
                                            <td>{{ $p->tanggal_selesai }}</td>
                                        </tr>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
