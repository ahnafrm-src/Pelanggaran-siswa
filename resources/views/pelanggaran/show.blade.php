@extends('layouts.app')

@section('title', 'Pelanggaran')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Detail Pelanggaran</h1>

            <div>
                <strong>Jenis Pelanggaran:</strong>
                {{ $pelanggarans->JenisPelanggaran->jenis }}
            </div>
            <div>
                <strong>Deskripsi Pelanggaran:</strong>
                {{ $pelanggarans->JenisPelanggaran->keterangan }}
            </div>
            <div>
                <strong>Poin Pelanggaran:</strong>
                {{ $pelanggarans->JenisPelanggaran->keterangan }}
            </div>
            <div>
                <strong>Siswa:</strong>
                {{ $pelanggarans->SiswaPelanggaran->nama }}
            </div>
            <div>
                
                <strong>Kelas Siswa:</strong>
                {{ $pelanggarans->SiswaPelanggaran->Kelas->kelas }}
            </div>
            <div>
                <strong>Tanggal:</strong>
                {{ $pelanggarans->tanggal }}
            </div>
            <div>
                <strong>Foto:</strong>
                @if ($pelanggarans->foto)
                    <img src="{{ asset('storage/' . $pelanggarans->foto) }}" alt="{{ $pelanggarans->JenisPelanggaran->jenis }}" width="200">
                @else
                    -
                @endif
            </div>
            <div>
                <strong>User:</strong>
                {{ $pelanggarans->UserPelanggaran->nama }}
            </div>

            <div>
                <a href="{{ route('pelanggaran.index') }}">Kembali ke Daftar Pelanggaran</a>
            </div>
        </div>
    </div>
</div>

@endsection