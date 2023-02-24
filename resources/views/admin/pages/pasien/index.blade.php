@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Pasien</h4>
                    <a href="{{ route('pasien.create') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-picture-o">Tambah Pasien</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.RM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Registrasi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pasiens as $pasien)
                                <tr>
                                    <td>{{ $pasien->no_rm }}</td>
                                    <td>{{ $pasien->nama_pasien }}</td>
                                    <td>{{ $pasien->nik }}</td>
                                    <td>
                                        <a href="{{ url('/registrasi/create', $pasien->no_rm) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-picture-o">Registrasi</i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('pasien.edit', $pasien->no_rm) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-picture-o">Edit</i>
                                        </a>
                                        <a href="{{ route('pasien.delete', $pasien->no_rm) }}" class="btn btn-sm btn-danger"
                                            onclick="return confirm('yakin?');">Delete</a>
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
