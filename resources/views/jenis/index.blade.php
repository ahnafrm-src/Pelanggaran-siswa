@extends('layouts.app')

@section('title' , 'Jenis')

@section('content')

 <div>
        <div style="background: #435663; color: #FFF8D4;padding:5px">
            <h1 style="margin-left: 20px">Daftar kelas</h1>
        </div>

        <div>
            <a href="{{ route('jenis.create') }}">Tambah Jenis</a>
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
                        <th >Kelas</th>
                        <th >Walikelas</th>
                        <th >Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $jns)
                        <tr>
                            <td >{{ $loop->iteration }}</td>
                            <td>{{ $jns->jenis }}</td>
                            <td>{{ $jns->keterangan }}</td>
                            <td> {{ $jns->poin }} </td>
                            <td>
                                <a href="{{ route('jenis.edit', $jns->id) }}">Edit</a>
                                <form action="{{ route('jenis.destroy', $jns->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection