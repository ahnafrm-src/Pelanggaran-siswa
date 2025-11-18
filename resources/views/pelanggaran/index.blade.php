@extends('layouts.app')

@section('title', 'Pelanggaran')

@section('content')

    <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 25px">Daftar Pelanggaran</h1>
        </div>

        <div style="margin: 25px">
            @if(session('user_level') == 'admin')
            <div class="btn btn-success">
                <a href="{{ route('pelanggaran.create') }}"  style="color:#FFF8D4;text-decoration:none">Tambah Pelanggaran</a>
            </div>
        @endif

        <div style="margin-top: 20px">

            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif

            <table cellpadding="10" cellspacing="0" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <thead style="background: #313647">
                    <tr style="color:#FFF8D4">
                        <th>No</th>
                        <th>jenis Pelanggaran</th>
                        <th>Siswa</th>
                        <th>tanggal</th>
                        <th>foto</th>
                        <th>user</th>
                        @if (session('user_level') == 'admin')
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggarans as $pelanggaran)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a
                                style="text-decoration:none;color:#435663" href="{{ route('pelanggaran.show', $pelanggaran->id) }}">{{ $pelanggaran->JenisPelanggaran->jenis }}</a>
                            </td>
                            <td>{{ $pelanggaran->SiswaPelanggaran->nama }}</td>
                            <td>{{ $pelanggaran->tanggal }}</td>
                            <td>
                                @if ($pelanggaran->foto == null)
                                    -
                                @else
                                    <img src="{{ asset('storage/' . $pelanggaran->foto) }}"
                                        alt="{{ $pelanggaran->JenisPelanggaran->jenis }}" width="100">
                                @endif
                            </td>
                            <td>{{ $pelanggaran->UserPelanggaran->nama }}</td>
                            @if(session('user_level') == 'admin')
                                <th>
                                    <a href="{{ route('pelanggaran.edit', $pelanggaran->id) }}" style="display:inline-block" class="btn btn-danger">Edit</a>
                                    <form action="{{ route('pelanggaran.destroy', $pelanggaran->id) }}" method="post" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-warning">Delete</button>
                                    </form>
                                </th>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        
    </div>

@endsection