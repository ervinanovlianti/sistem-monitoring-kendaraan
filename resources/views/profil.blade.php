@extends('layout.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            {{-- profil user yang login --}}
            <h2 class="page-title">Profil</h2>
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
                                            <td>Username</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td>{{ Auth::user()->hak_akses }}</td>
                                        </tr>
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
