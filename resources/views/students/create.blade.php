@extends('layouts.app')

@section('content')
<h2>Tambah Siswa</h2>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama') }}" required>
    <label>Jenis Kelamin</label>
    <select name="jekel" required>
        <option value="L">L</option>
        <option value="P">P</option>
    </select>
    <label>Kelas</label>
    <input type="text" name="kelas" value="{{ old('kelas') }}">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
    <button type="submit">Simpan</button>
</form>
@endsection
