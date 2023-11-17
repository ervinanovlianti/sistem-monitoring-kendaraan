@extends('layout.main')
@section('content')
        <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Perusahaan</h2>
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
                                        <th>Nama Perusahaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($perusahaan as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>
                                                <a href="{{ route('data.tambang', $p->id) }}" class="btn btn-primary">Show</a>
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