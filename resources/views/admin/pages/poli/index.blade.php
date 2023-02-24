@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h4 class="card-title">Data Poli</h4>
                    <a href="{{ route('poli.create') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-picture-o">Tambah Poli</i>
                    </a>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID Poli</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($polis as $poli)
                                <tr>
                                    <td>{{ $poli->id_poli }}</td>
                                    <td>{{ $poli->nm_poli }}</td>
                                    <td>
                                        <a href="{{ Route('poli.edit', $poli->id_poli) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-picture-o">Edit</i>
                                        </a>
                                        <a href="{{ Route('poli.delete', $poli->id_poli) }}" class="btn btn-sm btn-danger"
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
