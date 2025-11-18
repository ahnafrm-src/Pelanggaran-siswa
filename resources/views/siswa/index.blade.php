@extends('layouts.app')

@section('title', 'Siswa')

@section('content')

 <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 20px">Daftar Siswa</h1>
        </div>

        <div>
            <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
        </div>
        
        
        <div>

            @if (session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
            @endif

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th >No</th>
                        <th>foto</th>
                        <th>nis</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>kelamin</th>
                        <th>agama</th>
                        <th>alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td>
                                @if ($siswa->foto == null)
                                    -
                                @else
                                    <img src="{{ asset('storage/' . $siswa->foto) }}" alt="{{ $siswa->nama }}" width="50">
                                @endif
                                
                            </td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->Kelas->kelas }}</td>
                            <td>{{ $siswa->kelamin }}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <th>
                                <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
