@extends('layouts.app')

@section('title', 'Kelas')

@section('content')

    <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 20px">Daftar kelas</h1>
        </div>

        <div style="margin: 20px">
            <div class="btn btn-success">
                <a href="{{ route('kelas.create') }}" style="color:#FFF8D4">Tambah kelas</a>
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
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Walikelas</th>
                            <th>Keterangan</th>
                            <th>Siswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $kls)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kls->kelas }}</td>
                                <td>{{ $kls->walikelas }}</td>
                                <td>
                                    @if($kls->keterangan)
                                        {{ $kls->keterangan }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <ul>
                                        @if ($kls->Siswa->count() == 0)
                                            -
                                        @else
                                            <li>
                                                @foreach ($kls->Siswa as $siswa)
                                                    {{ $siswa->nama }}
                                                @endforeach
                                            </li>
                                        @endif
                                    </ul>
                                </td>
                                <th>
                                    <a href="{{ route('kelas.edit', $kls->id) }}">Edit</a>
                                    <form action="{{ route('kelas.destroy', $kls->id) }}" method="post">
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
    </div>

@endsection