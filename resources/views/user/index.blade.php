@extends('layouts.app')

@section('title', 'User')

@section('content')

    <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 20px">Daftar User</h1>
        </div>

        {{-- <div>
            <a href="{{ route('user.create') }}">Tambah User</a>
        </div> --}}
        
        
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
                        <th >Username</th>
                        <th >Nama</th>
                        <th >Kelamin</th>
                        <th >Alamat</th>
                        <th >Level</th>
                        {{-- <th>Pelanggaran</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->kelamin }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->level }}</td>
                            {{-- <td>
                                <ul>
                                    @if($user->Pelanggaran->rowCount() == 0)
                                        -
                                    @else
                                    @foreach ($user->Pelanggaran as $pelanggaran)
                                        {{ $pelanggaran->id }}
                                    @endforeach
                                    @endif
                                </ul>
                            </td> --}}
                            <th>
                                <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="post">
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