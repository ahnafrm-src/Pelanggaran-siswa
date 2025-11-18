@extends('layouts.app')

@section('title', 'Pelanggaran')

@section('content')

 <div>
        <div>
            <h1>Daftar Pelanggaran</h1>
        </div>

        @if(session('user_kelas') == 'admin')
        <div>
            <a href="{{ route('pelanggaran.create') }}">Tambah Pelanggaran</a>
        </div>
        @endif
        
        <div>

            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
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
                            <td><a href="{{ route('pelanggaran.show', $pelanggaran->id) }}">{{ $pelanggaran->JenisPelanggaran->jenis }}</a></td>
                            <td>{{ $pelanggaran->SiswaPelanggaran->nama }}</td>
                            <td>{{ $pelanggaran->tanggal }}</td>
                            <td>
                                @if ($pelanggaran->foto == null)
                                -
                                @else
                                <img src="{{ asset('storage/' . $pelanggaran->foto) }}" alt="{{ $pelanggaran->JenisPelanggaran->jenis }}" width="100">
                                @endif
                            </td>
                            <td>{{ $pelanggaran->UserPelanggaran->nama }}</td>
                            @if(session('user_kelas') == 'admin')
                            <th>
                                <a href="{{ route('pelanggaran.edit', $pelanggaran->id) }}">Edit</a>
                                <form action="{{ route('pelanggaran.destroy', $pelanggaran->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </th>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
