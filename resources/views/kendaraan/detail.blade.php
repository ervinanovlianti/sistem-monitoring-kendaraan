@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Detail Kendaraan </h2>
            <p></p>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            {{-- tampilkan dalam data tanpa tabel --}}
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Merk</td>
                                            <td>{{ $kendaraan->merk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tipe</td>
                                            <td>{{ $kendaraan->tipe }}</td>
                                        </tr>
                                        <tr>
                                            <td>Plat</td>
                                            <td>{{ $kendaraan->plat_nomor }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- simple table -->

            </div> <!-- end section -->
            <h2 class="page-title">Konsumsi BBM</h2>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Tipe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($bbm as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->tanggal }}</td>
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
                                        <th>Tanggal Service (Hari)</th>
                                        <th>Kondisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($jadwalService as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->tanggal_service }}</td>
                                            <td>{{ $p->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <h2 class="page-title">Riwayat Pemakaian Kendaraan </h2></h2>
            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            {{-- tampilkan dalam data tanpa tabel --}}
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Supir</th>
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
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $p->nama }}</td>
                                                <td>{{ $p->tanggal_mulai }}</td>
                                                <td>{{ $p->tanggal_selesai }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- simple table -->

            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
