<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen Taura University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.master')

    @section('content')
    <div class="container">
        <h3>Data Dosen</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">+ Tambah Dosen</a>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            @foreach($data as $key => $d)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $d->nidn }}</td>
                <td>{{ $d->nama }}</td>
                <td>
                    <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
</body>
</html>