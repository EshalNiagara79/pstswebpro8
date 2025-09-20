@extends('layouts.app')

@section('content')
<a href="{{ route('students.create') }}">+ Tambah Siswa</a>
<table>
    <thead>
        <tr>
            <th>ID</th><th>Nama</th><th>Jenis Kelamin</th><th>Kelas</th><th>Tanggal Lahir</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->jekel }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>
                <a href="{{ route('students.edit',$s) }}">Edit</a>
                <form action="{{ route('students.destroy',$s) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
