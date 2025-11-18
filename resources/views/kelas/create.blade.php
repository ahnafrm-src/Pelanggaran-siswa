@extends('layouts.app')

@section('title' , 'Kelas')

@section('content')

<div>
    <h1>Tambah Kelas</h1>

    <form action="{{ route('kelas.store') }}" method="post">
        @csrf
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required>
        </div>
        <div>
            <label for="walikelas">Wali Kelas:</label>
            <input type="text" name="walikelas" id="walikelas" required>
        </div>
        <div>
            <label for="keterangan">Keterangan:</label>
            <input type="text" name="keterangan" id="keterangan">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection