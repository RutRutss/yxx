@extends('layout')
@section('title', 'Login')
@section('main')
    <div class="container w-50">
        <div class="card form-group m-5">

            <form action="{{ url('/checkuser') }}" class="form-control" method="post">
                <h1>Login</h1>
                @csrf

                @error('message')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
                <label for="password">Password</label>
                <input type="password" class="form-control mb-2" name="password">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </form>
        </div>
    </div>

@endsection
