@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Dokter</h4>
                    <a href="{{ route('dokter.create') }}" class="btn btn-success">
                        <i class="bi bi-person-plus"> Tambah Data Dokter</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Kode Dokter</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Poli</th>
                                <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @forelse ($dokters as $dokter)
                                <tr>
                                    <td>{{ $dokter->kd_dokter }}</td>
                                    <td>{{ $dokter->nm_dokter }}</td>
                                    <td>{{ $dokter->poli->nm_poli }}</td>
                                    <td>
                                        <a href="{{ route('dokter.edit', $dokter->kd_dokter) }}" class="btn btn-primary">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('dokter.delete', $dokter->kd_dokter) }}" class="btn btn-danger"
                                            onclick="return confirm('yakin?');">
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
