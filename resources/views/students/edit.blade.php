@extends('layouts.app')

@section('content')
<h2>Edit Siswa</h2>
<form action="{{ route('students.update',$student) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama',$student->nama) }}" required>
    <label>Jekel</label>
    <select name="jekel" required>
        <option value="L" {{ $student->jekel=='L' ? 'selected' : '' }}>L</option>
        <option value="P" {{ $student->jekel=='P' ? 'selected' : '' }}>P</option>
    </select>
    <label>Kelas</label>
    <input type="text" name="kelas" value="{{ old('kelas',$student->kelas) }}">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir',$student->tanggal_lahir) }}">
    <button type="submit">Update</button>
</form>
@endsection
