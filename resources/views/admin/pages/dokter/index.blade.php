@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Dokter</h4>
                    <a href="{{ route('dokter.create') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-picture-o">Tambah Data Dokter</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Kode Dokter</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Poli</th>
                                <th scope="col">Act</th>
                        </thead>
                        <tbody>
                            @forelse ($dokters as $dokter)
                                <tr>
                                    <td>{{ $dokter->kd_dokter }}</td>
                                    <td>{{ $dokter->nm_dokter }}</td>
                                    <td>{{ $dokter->poli->nm_poli }}</td>
                                    <td>
                                        <a href="{{ route('dokter.edit', $dokter->kd_dokter) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-picture-o">Edit</i>
                                        </a>
                                        <a href="{{ route('dokter.delete', $dokter->kd_dokter) }}"
                                            class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center p-5 ">
                                        Data Tidak Tersedia
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Recent Sales -->
    @endsection
