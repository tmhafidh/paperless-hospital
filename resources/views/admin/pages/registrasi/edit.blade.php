@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data registrasi </h5>
                    <form action="{{ Route('registrasi.update', $registrasi->no_rawat) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <select type="text" name="no_rm" class="form-control">
                                    <option value="">-Pilih Pasien-</option>
                                    @foreach ($no_rm as $no_rm)
                                        <option value="{{ $no_rm->no_rm }}"
                                            {{ old('no_rm', $no_rm->no_rm) == $no_rm->no_rm ? 'selected' : null }}>
                                            {{ $no_rm->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Nomor Rawat</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_rawat"
                                    value="{{ old('no_rawat') ? old('no_rawat') : $registrasi->no_rawat }}"
                                    class="form-control @error('no_rawat') is-invalid @enderror">
                            </div>
                            @error('no_rawat')
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
                                    @foreach ($id_poli as $id_poli)
                                        <option value="{{ $id_poli->id_poli }}"
                                            {{ old('id_poli') == $id_poli->id_poli ? 'selected' : null }}>
                                            {{ $id_poli->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Edit Data registrasi</button>
                        </div>

                    </form>
                @endsection
