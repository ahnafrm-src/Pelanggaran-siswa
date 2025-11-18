@extends('layouts.app')

@section('title' , 'Jenis')

@section('content')

<div>
    <h1>Tambah Jenis</h1>

    <form action="{{ route('jenis.update' , $jenis->id) }}" method="post">
        @csrf
        <div>
            <label for="jenis">jenis:</label>
            <input type="text" name="jenis" id="jenis" required value="{{ $jenis->jenis }}"> 
        </div>
        <div>
            <label for="keterangan">keterangan:</label>
            <input type="text" name="keterangan" id="keterangan" value="{{ $jenis->keterangan }}">
        </div>
        <div>
            <label for="poin">poin:</label>
            <input type="number" name="poin" id="poin" required value="{{ $jenis->poin }}">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection