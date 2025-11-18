@extends('layouts.app')

@section('title' , 'kelas')

@section('content')

<div>
    <h1>Edit Kelas</h1>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required value="{{ $kelas->kelas }}">
        </div>
        <div>
            <label for="walikelas">Wali Kelas:</label>
            <input type="text" name="walikelas" id="walikelas" required value="{{ $kelas->walikelas }}">
        </div>
        <div>
            <label for="keterangan">Keterangan:</label>
            <input type="text" name="keterangan" id="keterangan" value="{{ $kelas->keterangan }}">
        </div>
        <div>
            <button type="submit">Edit</button>
        </div>
    </form>
</div>

@endsection