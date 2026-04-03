<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.master')

    @section('content')
    <div class="container">
        <h3>Edit Dosen</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dosen.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>NIDN</label>
                <input type="text" name="nidn" value="{{ $data->nidn }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    @endsection
</body>
</html>