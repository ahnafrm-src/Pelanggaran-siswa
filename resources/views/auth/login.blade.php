@extends('layouts.app')

@section('title', 'login')

@section('content')
    
<div>

    @if(session('username'))
        <p>{{ session('username') }}</p>
    @endif

    <form action="{{ route('login.process') }}" method="post">
        @csrf
        <div>
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>

@endSection