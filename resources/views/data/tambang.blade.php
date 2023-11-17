@extends('layout.main')
@section('content')
        <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Kantor</h2>
            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kantor</th>
                                        {{-- <th>Tambang</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kantor as $k)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $k->nama }}</td>
                                        </tr>
                                    @endforeach
                                    @foreach ($tambang as $t)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $t->lokasi }}</td>
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