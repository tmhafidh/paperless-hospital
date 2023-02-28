@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Registrasi</h4>
                    <a href="{{ route('registrasi.create') }}" class="btn btn-success">
                        <i class="bi bi-person-plus"> Tambah Data Registrasi</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">No. Registrasi</th>
                                <th scope="col">No. Rawat</th>
                                <th scope="col">Poli</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @forelse ($registrasis as $registrasi)
                                <tr>
                                    <td>{{ $registrasi->pasien->no_rm }}</td>
                                    <td>{{ $registrasi->no_registrasi }}</td>
                                    <td>{{ $registrasi->no_rawat }}</td>
                                    <td>{{ $registrasi->id_poli }}</td>
                                    <td>{{ $registrasi->tgl_registrasi }}</td>

                                    <td>
                                        <a href="{{ route('registrasi.edit', $registrasi->no_rawat) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('registrasi.delete', $registrasi->no_rawat) }}"
                                            class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Recent Sales -->
    @endsection
