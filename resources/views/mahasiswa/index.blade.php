<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Taura University</title>
</head>
<body>
    @extends('layout.master')

    @section('content')
    <h3>Data Mahasiswa</h3>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">Tambah</a>

    <table class="table">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $m)
    <tr>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->jurusan }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
    @endsection
</body>
</html>