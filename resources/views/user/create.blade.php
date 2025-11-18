@extends('layouts.app')

@section('title', 'Registrasi User')

@section('content')

<div>
    <h1>Register User</h1>

    <form action="{{ route('register.process') }}" method="post">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="kelamin">Kelamin:</label>
            <input type="text" name="kelamin" id="kelamin">
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <button type="submit">Register</button>
    </form>
</div>

@endsection