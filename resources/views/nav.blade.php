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
                    <a class="nav-link active" href="{{ url('/game') }}">รายชื่อเกม</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid justify-content-end me-5">
        @if (session('user'))
            <div class="text-white">
                <a href="{{ url('/logout') }}">
                    <button class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>&nbspLogout</button>
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
