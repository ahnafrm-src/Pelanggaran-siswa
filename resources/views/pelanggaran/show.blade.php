@extends('layouts.app')

@section('title', 'Pelanggaran')

@section('content')

    <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 20px">{{ $pelanggarans->JenisPelanggaran->jenis }} (poin: {{ $pelanggarans->JenisPelanggaran->poin }})</h1>
        </div>
        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);padding:10px;widht:300px; margin: 10px auto;">
            <div style="margin-left: 20px">
                <strong>Deskripsi Pelanggaran:</strong>
                {{ $pelanggarans->JenisPelanggaran->keterangan }}
            </div>
            <div style="margin-left: 20px">
                <strong>Siswa:</strong>
                {{ $pelanggarans->SiswaPelanggaran->nama }}
            </div>
            <div style="margin-left: 20px"> 
                <strong>Kelas Siswa:</strong>
                {{ $pelanggarans->SiswaPelanggaran->Kelas->kelas }}
            </div>
            <div style="margin-left: 20px">
                <strong>Tanggal:</strong>
                {{ $pelanggarans->tanggal }}
            </div>
            <div style="margin-left: 20px">
                <strong>Foto:</strong>
                @if ($pelanggarans->foto)
                    <img src="{{ asset('storage/' . $pelanggarans->foto) }}" alt="{{ $pelanggarans->JenisPelanggaran->jenis }}"
                        width="200">
                @else
                    -
                @endif
            </div>
            <div style="margin-left: 20px">
                <strong>User:</strong>
                {{ $pelanggarans->UserPelanggaran->nama }}
            </div>

            <div style="margin-left: 20px">
                <a href="{{ route('pelanggaran.index') }}">Kembali ke Daftar Pelanggaran</a>
            </div>
        </div>


    </div>

@endsection