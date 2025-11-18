@extends('layouts.app')

@section('title' , 'Siswa')

@section('content')

<div>
    <h1>Edit Siswa</h1>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="nis">nis:</label>
            <input type="text" name="nis" id="nis" required value="{{ $siswa->nis }}">
        </div>
        <div>
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" required value="{{ $siswa->nama }}">
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
            <input type="text" name="kelamin" id="kelamin" required value="{{ $siswa->kelamin }}">
        </div>
        <div>
            <label for="agama">agama:</label>
            <input type="text" name="agama" id="agama" required value="{{ $siswa->agama }}">
        </div>
        <div>
            <label for="alamat">alamat:</label>
            <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}">
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