@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Poli</h5>
                    <form action="{{ url('/poli/store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Poli</label>
                            <div class="col-sm-10">
                                <input type="text" name="nm_poli" value="{{ old('nm_poli') }}"
                                    class="form-control @error('nm_poli') is-invalid @enderror">
                            </div>
                            @error('nm_poli')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Tambah Data Poli</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form>
                @endsection
