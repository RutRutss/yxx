@extends('layout')
@section('title', 'Game')
@section('main')
    <div class="container bg-white">
        <div class="container p-4">
            <div class="d-flex justify-content-strat mt-5 mb-3">
                <h1 class="me-3">รายชื่อเกม</h1>
            </div>

            <div class="d-flex justify-content-strat">
                <a href="{{ url('/game/create') }}">
                    <button class="btn btn-success">
                        <i class="fas fa-plus"></i>
                        New Game
                    </button>
                </a>
                <div class="d-flex justify-content-end ms-2">
                    <form class="form d-flex" action="{{ url('/game-search') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="keyword">
                        <button type="submit" class="btn btn-primary ms-2 w-50">ค้นหา&nbsp;
                            <i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>

            {{-- <table class="table table-striped">
                <thead class="table-info">
                    <tr class="text-center">
                        <td>รหัสเกม</td>
                        <td>ชื่อเกม</td>
                        <td>รายละเอียด</td>
                        <td>ภาพประกอบ</td>
                        <td>ชื่อสลัก</td>
                        <td>รหัสผู้พัฒนา</td>
                    </tr>
                </thead> --}}
            <div class="row mt-5">
                @foreach ($games as $g)
                    {{-- <tr class="text-center">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->title }}</td>
                        <td>{{ $u->description }}</td>
                        <td><img style="height:80px" src="public/img/{{ $u->thumbnail }}" alt=""></td>
                        <td>{{ $u->slug }}</td>
                        <td>{{ $u->user_id }}</td>
                    </tr> --}}
                    <div class="col-3 mb-3">
                        <div class="card p-2" style="">
                            <img style="border-radius:3px;" src="{{ url('storage/app/' . $g->slug . '/' . $g->thumbnail) }}"
                                alt="">
                            <div class="card-body">
                                <a href="{{ url('game/play/' . $g->slug) }}">
                                    <h5 class="card-title"><strong>{{ $g->title }}</strong></h5>
                                </a>

                                <p class="card-text">Author : {{ $g->user->username }}</p>

                                <p class="card-text">{{ $g->description }}</p>

                                <a href="{{url('game/play/'.$g->slug.'/delete')}}"><button class="btn btn-danger">ลบ</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            </table>
        </div>
    </div>

@endsection
