@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Dokter</h5>
                    <form action="{{ url('/dokter/store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID Dokter</label>
                            <div class="col-sm-10">
                                <input type="text" name="kd_dokter" readonly="" value="{{ 'D' . $kd }}"
                                    class="form-control @error('kd_dokter') is-invalid @enderror">
                            </div>
                            @error('kd_dokter')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Dokter</label>
                            <div class="col-sm-10">
                                <input type="text" name="nm_dokter" value="{{ old('nm_dokter') }}" autofocus
                                    class="form-control @error('nm_dokter') is-invalid @enderror">
                            </div>
                            @error('nm_dokter')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Poli</label>
                            <div class="col-sm-10">
                                <select type="text" name="id_poli" class="form-control">
                                    <option value="">-Pilih Poli-</option>
                                    @foreach ($id_polis as $id_poli)
                                        <option value="{{ $id_poli->id_poli }}"
                                            {{ old('id_poli') == $id_poli->id_poli ? 'selected' : null }}>
                                            {{ $id_poli->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Tambah dokter</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                @endsection
