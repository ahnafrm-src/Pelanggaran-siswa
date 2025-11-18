<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    --}}

    <style>
        body{
            margin: 0;
            padding: 0;
        }

        .nav{
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <nav style="background:#313647; padding:25px;">
        @if(session('user_id'))
            @if(session('user_level') == 'admin')
                <a href="{{ route('home') }}" class="nav">Home</a>
                <a href="{{ route('user.index') }}" class="nav">User</a>
                <a href="{{ route('kelas.index') }}" class="nav">Kelas</a>
                <a href="{{ route('siswa.index') }}" class="nav">Siswa</a>
                <a href="{{ route('jenis.index') }}" class="nav">Jenis</a>
                <a href="{{ route('pelanggaran.index') }}" class="nav">Pelanggaran</a>
                <a href="{{ route('logout') }}" class="nav">Logout</a>
            @else
                <a href="{{ route('home') }}" class="nav">Home</a>
                <a href="{{ route('pelanggaran.index') }}" class="nav">Pelanggaran</a>
                <a href="{{ route('logout') }}" class="nav">Logout</a>
            @endif
        @else
            <a href="{{ route('login') }}" class="nav">Login</a>
            <a href="{{ route('register') }}" class="nav">Register</a>
        @endif

    </nav>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>