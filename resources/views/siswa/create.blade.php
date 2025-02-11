@extends('partials.main')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Add New Data</h2>

    <div class="row col-5">
        <div class="card-body">
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('name') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" required></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text">Jenis Kelamin</label>
                    <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin" name="jenis_kelamin" required>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mt-4">Simpan</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-4">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection