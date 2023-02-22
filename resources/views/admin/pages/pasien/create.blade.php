@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Pasien</h5>

                    <!-- General Form Elements -->
                    <form method="POST" action="{{ Route('pasien.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No. Rekam Medik</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_rm" value="{{ old('no_rm') }}"
                                    class="form-control @error('no_rm') is-invalid @enderror">
                            </div>
                            @error('no_rm')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pasien" value="{{ old('nama_pasien') }}"
                                    class="form-control @error('nama_pasien') is-invalid @enderror">
                            </div>
                            @error('nama_pasien')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="number" name="nik" value="{{ old('nik') }}"
                                    class="form-control @error('nik') is-invalid @enderror">
                            </div>
                            @error('nik')
                                <div class="text-muted">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form><!-- End General Form Elements -->
                @endsection
