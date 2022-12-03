<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Tugas</title>
</head>
<body>
    <div class="ms-3">
        <div>
            <h1>Tugas Laravel</h1>
            <ul>
                <li><a href="{{ url('zodiak') }}">Zodiak</a></li>
                <li><a href="{{ url('kalkulator') }}">Kalkulator</a></li>
                <li><a href="{{ url('suhu') }}">Suhu</a></li>
            </ul>
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @yield('menu')
        </div>
    </div>
</body>
</html>