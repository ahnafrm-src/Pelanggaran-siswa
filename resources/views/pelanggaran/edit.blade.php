@extends('layouts.app')

@section('title' , 'Pelanggaran')

@section('content')

<div>
    <h1>Edit Pelanggaran</h1>

    <form action="{{ route('pelanggaran.update', $pelanggaran->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="jenis">jenis:</label>
            <select name="jenis_id" id="jenis">
                @foreach ($jenis as $jns)
                    <option value="{{ $jns->id }}">{{ $jns->jenis }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="siswa">Siswa:</label>
            <select name="siswa_id" id="siswa">
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tanggal">tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" required value="{{ $pelanggaran->tanggal }}">
        </div>
        <div>
            <label for="user">user:</label>
            <select name="user_id" id="user">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nama }}</option>
                @endforeach
            </select>
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