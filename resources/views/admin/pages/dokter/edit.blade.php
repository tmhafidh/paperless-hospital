@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Dokter ({{ $dokter->nm_dokter }})</h5>
                    <form action="{{ Route('dokter.update', $dokter->kd_dokter) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kode Dokter</label>
                            <div class="col-sm-10">
                                <input type="text" name="kd_dokter"
                                    value="{{ old('kd_dokter') ? old('kd_dokter') : $dokter->kd_dokter }}"
                                    class="form-control @error('kd_dokter') is-invalid @enderror" readonly>
                            </div>
                            @error('_dokter')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nm_dokter"
                                    value="{{ old('nm_dokter') ? old('nm_dokter') : $dokter->nm_dokter }}"
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
                                            {{ old('id_poli', $dokter->id_poli) == $id_poli->id_poli ? 'selected' : null }}>
                                            {{ $id_poli->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Edit Data Dokter</button>
                        </div>

                    </form>
                @endsection
