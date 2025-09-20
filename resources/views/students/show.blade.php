@extends('layouts.app')

@section('content')
    <h2>Detail Siswa</h2>

    <ul>
        <li><strong>ID:</strong> {{ $student->id }}</li>
        <li><strong>Nama:</strong> {{ $student->nama }}</li>
        <li><strong>Jenis Kelamin:</strong> {{ $student->jekel }}</li>
        <li><strong>Tanggal Lahir:</strong> {{ $student->tanggal_lahir }}</li>
    </ul>

    <a href="{{ route('students.index') }}">← Kembali ke daftar siswa</a>
@endsection
