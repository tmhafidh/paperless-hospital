@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Poli ({{ $poli->nm_poli }})</h5>
                    <strong class="card-title">Edit Data poli</strong>
                    <form action="{{ Route('poli.update', $poli->id_poli) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Poli</label>
                            <div class="col-sm-10">
                                <input type="text" name="nm_poli"
                                    value="{{ old('nm_poli') ? old('nm_poli') : $poli->nm_poli }}"
                                    class="form-control @error('nm_poli') is-invalid @enderror">
                            </div>
                            @error('nama_poli')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Edit Data poli</button>
                        </div>

                    </form>
                @endsection
