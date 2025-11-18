@extends('layouts.app')

@section('title', 'login')

@section('content')

<div>
    <div width="300px" style="margin:20px auto; padding:20px; border:1px solid #ccc; border-radius:5px;">
        <h1>Login</h1>
        @if(session('username'))
            <p>{{ session('username') }}</p>
        @endif
        <form action="{{ route('login.process') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-3" style="margin-top: 10px">Login</button>
        </form>
    </div>
</div>

@endSection