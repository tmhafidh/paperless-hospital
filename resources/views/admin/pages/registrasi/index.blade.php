@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Registrasi</h4>
                    <a href="{{ route('registrasi.create') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-picture-o">Tambah Data registrasi</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No. Rekam Medik</th>
                                <th scope="col">No. Registrasi</th>
                                <th scope="col">No. Rawat</th>
                                <th scope="col">Poli</th>
                                <th scope="col">Tanggal</th>
                                <th>act</th>
                        </thead>
                        <tbody>
                            @forelse ($registrasis as $registrasi)
                                <tr>
                                    <td>{{ $registrasi->no_rm }}</td>
                                    <td>{{ $registrasi->no_registrasi }}</td>
                                    <td>{{ $registrasi->no_rawat }}</td>
                                    <td>{{ $registrasi->id_poli }}</td>
                                    <td>{{ $registrasi->tgl_registrasi }}</td>

                                    <td>
                                        <a href="{{ route('registrasi.edit', $registrasi->no_rawat) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-picture-o">Edit</i>
                                        </a>
                                        <a href="{{ route('registrasi.delete', $registrasi->no_rawat) }}"
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
