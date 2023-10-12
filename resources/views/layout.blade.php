<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid justify-content-start ms-5">
            <a href="{{ url('/') }}"><img
                    style="height:50px; background:white; border-radius:50%; padding:5px; margin:5px"
                    src="{{asset('public/img/letter-w.png')}}"></a>

        </div>
        <div class="container-fluid justify-content-center">

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/game') }}">เกม</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid justify-content-end me-5">
            @if (session('user'))
                <div class="text-white">
                    <a href="{{ url('/logout') }}">
                        <button class="btn btn-danger">Logout</button>
                    </a>
                </div>
            @else
                <div class="text-white">
                    <a class="nav-link active" href="{{ url('/login') }}">
                        <button class="btn btn-primary">Login</button>
                    </a>
                </div>
            @endif
        </div>
    </nav>

    @yield('main')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
