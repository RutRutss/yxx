@extends('layout')
@section('title', 'Game')
@section('main')
    <div class="container p-4"><iframe src="{{ url('/storage/app/' . $game->slug . '/FileGame/') }}"
        frameborder="0" width="100%" height="600px"></iframe>
    </div>

@endsection
