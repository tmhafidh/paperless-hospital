@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrasi Pasien</h5>
                    <form action="{{ url('/registrasi/store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <select type="text" name="no_rm" class="form-control">
                                    <option value="">-Pilih Pasien-</option>
                                    @foreach ($no_rms as $no_rm)
                                        <option value="{{ $no_rm->no_rm }}"
                                            {{ old('no_rm') == $no_rm->no_rm ? 'selected' : null }}>
                                            {{ $no_rm->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_registrasi" class="col-sm-2 col-form-label">Nomor Registrasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_registrasi" readonly value="{{ $kd }}"
                                    class="form-control @error('no_registrasi') is-invalid @enderror">
                            </div>
                            @error('no_registrasi')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="no_rawat" class="col-sm-2 col-form-label">Nomor Rawat</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_rawat" value="{{ date('Y/m/d') . '/' . $kd }}" readonly
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
                                    @foreach ($id_polis as $id_poli)
                                        <option value="{{ $id_poli->id_poli }}"
                                            {{ old('id_poli') == $id_poli->id_poli ? 'selected' : null }}>
                                            {{ $id_poli->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Registrasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tgl_registrasi"
                                    value="{{ date('Y-m-d') }}" readonly
                                    @error('tgl_registrasi')
                                    is-invalid
                                @enderror">

                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrasi Pasien</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                @endsection
