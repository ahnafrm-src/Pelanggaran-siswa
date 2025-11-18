@extends('layouts.app')

@section('title', 'Registrasi User')

@section('content')

<div>
    <h1>Register User</h1>

    <form action="{{ route('user.update' , $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required value="{{ $user->username }}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"> 
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required value="{{ $user->nama }}">
        </div>
        <div>
            <label for="kelamin">Kelamin:</label>
            <input type="text" name="kelamin" id="kelamin" value="{{ $user->kelamin }}">
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" value="{{ $user->alamat }}">
        </div>
        <div>
            <label for="level">Level:</label>
            <input type="text" name="level" id="level" value="{{ $user->level }}">
        </div>
        <button type="submit">Update</button>
    </form>
</div>

@endsection