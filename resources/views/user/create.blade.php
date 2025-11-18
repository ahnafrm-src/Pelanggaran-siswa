@extends('layouts.app')

@section('title', 'Registrasi User')

@section('content')

<div  style="width=300px;margin:20px auto; padding:20px; border:1px solid #ccc; border-radius:5px;">
    <h1>Register User</h1>

    <form action="{{ route('register.process') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" required class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="kelamin" class="form-label">Kelamin:</label>
            <select name="kelamin" class="form-select">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Register</button>
    </form>
</div>

@endsection