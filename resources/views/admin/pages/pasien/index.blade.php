@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Data Pasien</h5>
                    <a href="{{ route('pasien.create') }}">
                        tambah pasien
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.RM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Registrasi</th>
                                <th scope="col">----</th>
                            </tr>
                        </thead>
                        @foreach ($pasiens as $pasien)
                            <tbody>
                                <tr>
                                    <td>{{ $pasien->no_rm }}</td>
                                    <td>{{ $pasien->nama_pasien }}</td>
                                    <td>{{ $pasien->nik }}</td>

                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                </div>

            </div>
        </div><!-- End Recent Sales -->
    @endsection
