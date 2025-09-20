<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Siswa</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
    <div class="container">
        <h1>CRUD Siswa</h1>
        @if(session('success'))
            <div style="background:#ccffcc;padding:10px;border-radius:4px">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
