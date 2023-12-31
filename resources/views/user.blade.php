@extends('layout')
@section('title', 'User')
@section('main')
    <div class="container  bg-white">
        <div class="container p-4">
            <h1 class="mt-5 mb-3">ชื่อผู้ใช้ทั้งหมด</h1>

            <div class="container ">

                <div class="m-2 d-flex justify-content-end">
                    <form class="form d-flex" action="{{ url('/search') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="keyword">
                        <input type="submit" value="ค้นหา" class="btn btn-primary ms-2">
                    </form>
                    <form class="form d-flex" action="{{ url('/search') }}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" name="keyword" value=" ">
                        <input type="submit" value="รีเซ็ต" class="btn btn-warning ms-2">
                    </form>
                </div>

                <table class="table table-striped">
                    <thead class="table-info">
                        <tr class="text-center">
                            <td>id</td>
                            <td>username</td>
                            <td>username</td>
                            <td>user type</td>
                            <td>register time</td>
                            <td>last login</td>
                            <td>score</td>
                            <td>blocked</td>
                            <td>resons</td>
                            <td>create at</td>
                            <td>update at</td>
                        </tr>
                    </thead>

                    @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->username }}</td>
                            <td>{{ $u->username }}</td>
                            <td>{{ $u->user_type }}</td>
                            <td>{{ $u->registered_time }}</td>
                            <td>{{ $u->last_login }}</td>
                            <td>{{ $u->score }}</td>
                            <td>{{ $u->blocked }}</td>
                            <td>{{ $u->resons }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td>{{ $u->updated_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
