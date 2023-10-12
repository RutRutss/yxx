@extends('layout')
@section('title', 'Game')
@section('main')
    <div class="container  bg-white">
        <h1 class="mt-5 mb-3 text-danger">Show All Game</h1>

        <div class="container card shadow p-4">
            <a href="{{ url('/game/create') }}"><button class="btn btn-success">new</button></a>
            <div class="m-2 d-flex justify-content-end">
                <form class="form d-flex" action="{{ url('/game-search') }}" method="post">
                    @csrf
                    <input type="text" class="form-control" name="keyword">
                    <input type="submit" value="ค้นหา" class="btn btn-primary ms-2">
                </form>
            </div>

            <table class="table table-striped">
                <thead class="table-info">
                    <tr class="text-center">
                        <td>รหัสเกม</td>
                        <td>ชื่อเกม</td>
                        <td>รายละเอียด</td>
                        <td>ภาพประกอบ</td>
                        <td>สลัก</td>
                        <td>รหัสผู้พัฒนา</td>
                    </tr>
                </thead>

                @foreach ($games as $u)
                    <tr class="text-center">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->title }}</td>
                        <td>{{ $u->description }}</td>
                        <td><img style="height:80px" src="public/img/{{ $u->thumbnail }}" alt=""></td>
                        <td>{{ $u->slug }}</td>
                        <td>{{ $u->user_id }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
