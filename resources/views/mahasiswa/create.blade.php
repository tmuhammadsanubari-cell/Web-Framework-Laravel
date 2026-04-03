<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.master')

    @section('content')
    <h3>Tambah Mahasiswa</h3>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    <input type="text" name="nim" placeholder="NIM" class="form-control mb-2">
    <input type="text" name="nama" placeholder="Nama" class="form-control mb-2">
    <input type="text" name="jurusan" placeholder="Jurusan" class="form-control mb-2">

    <button class="btn btn-success">Simpan</button>
    </form>
    @endsection
</body>
</html>