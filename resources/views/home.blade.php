@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div style="background: #435663; color: #FFF8D4;padding:5px">
        <h1 style="margin-left: 20px">Selamat Datang di Home</h1>
    </div>

    <div style="margin:20px auto; width:fit-content;">
        <h4 style="margin:0;font-size:5em">Halo {{ session('user_name') }}, Sebagai {{ session('user_level') }}</h4>
    </div>
@endsection