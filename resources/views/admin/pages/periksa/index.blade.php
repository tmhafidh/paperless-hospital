@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Periksa Pasien</h4>
                    <a href="{{ route('periksa.create') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-picture-o">Tambah Data Periksa</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">act</th>
                        </thead>
                        <tbody>
                            @forelse ($periksas as $periksa)
                                <tr>
                                    <td>{{ $periksa->no_rm }}</td>
                                    <td>{{ $periksa->kd_dokter }}</td>
                                    <td>{{ $periksa->ket_diagnosa }}</td>
                                    <td>
                                        <a href="{{ route('periksa.edit', $periksa->no_rawat) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-picture-o">Edit</i>
                                        </a>
                                        <a href="{{ route('periksa.delete', $periksa->no_rawat) }}"
                                            class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Delete</a>
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
