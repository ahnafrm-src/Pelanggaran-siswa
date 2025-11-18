@extends('layouts.app')

@section('title', 'Pelanggaran')

@section('content')

    <div>
        <div width="300px" style="margin:20px auto; padding:10px 50px;">
            <div style="padding:20px ;border:1px solid #ccc; border-radius:5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)">
                <h1>Tambah Pelanggaran</h1>
                <form action="{{ route('pelanggaran.update', $pelanggaran->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-3">
                        <label for="jenis" class="form-label">jenis:</label>
                        <select name="jenis_id" id="jenis" class="form-select">
                            @foreach ($jenis as $jns)
                                <option value="{{ $jns->id }}">{{ $jns->jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="siswa" class="form-label">Siswa:</label>
                        <select name="siswa_id" id="siswa" class="form-select">
                            @foreach ($siswas as $siswa)
                                <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">tanggal:</label>
                        <input type="date" name="tanggal" id="tanggal" required class="form-control" value="{{ $pelanggaran->tanggal }}">
                    </div>
                    <div class="col-sm-3">
                        <label for="user" class="form-label">user:</label>
                        <select name="user_id" id="user" class="form-select">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto:</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection