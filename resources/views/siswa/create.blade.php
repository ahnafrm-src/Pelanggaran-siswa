@extends('layouts.app')

@section('title' , 'Siswa')

@section('content')

<div style="margin-left:20px">
    <h1>Tambah Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nis">nis:</label>
            <input type="text" name="nis" id="nis" required>
        </div>
        <div>
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="kelas">kelas:</label>
            <select name="kelas_id" id="">
                @foreach ($kelas as $kls)
                    <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="kelamin">kelamin:</label>
            <input type="text" name="kelamin" id="kelamin" required>
        </div>
        <div>
            <label for="agama">agama:</label>
            <input type="text" name="agama" id="agama" required>
        </div>
        <div>
            <label for="alamat">alamat:</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label for="foto">foto:</label>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection