@extends('layout')
@section('title', 'Login')
@section('main')
    <div class="container w-50">
        <div class="form-group m-5">

            <form action="{{ url('/checkuser') }}" class="form-control" method="post">
                <div class="d-flex justify-content-center m-3">
                    <h1 class="">เข้าสู่ระบบ</h1>
                </div>
                @csrf

                @error('message')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="ps-5 pe-5">
                    <label for="username" class="mb-3">ชื่อผู้ใช้</label>
                    <input type="text" class="form-control mb-3" name="username">
                    <label for="password" class="mb-3">รหัสผ่าน</label>
                    <input type="password" class="form-control mb-4" name="password">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-3">เข้าสู่ระบบ</button>
                </div>
            </form>
        </div>
    </div>

@endsection
