<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.master')

    @section('content')
    <div class="container">
        <h3>Tambah Matakuliah</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Kode MK</label>
                <input type="text" name="kode_mk" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama MK</label>
                <input type="text" name="nama_mk" class="form-control">
            </div>

            <div class="mb-3">
                <label>SKS</label>
                <input type="number" name="sks" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    @endsection
</body>
</html>