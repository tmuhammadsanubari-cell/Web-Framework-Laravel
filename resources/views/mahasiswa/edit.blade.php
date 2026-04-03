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
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nim" value="{{ $data->nim }}" class="form-control mb-2">
    <input type="text" name="nama" value="{{ $data->nama }}" class="form-control mb-2">
    <input type="text" name="jurusan" value="{{ $data->jurusan }}" class="form-control mb-2">

    <button class="btn btn-success">Update</button>
    </form>
    @endsection
</body>
</html>