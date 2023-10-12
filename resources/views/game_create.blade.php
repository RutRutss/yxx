@extends('layout')
@section('title', 'Game')
@section('main')
    <div class="container p-4">
        <div class="container w-50 mt-5 ">
            <form action="{{ url('/game/upload') }}" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-center m-3">
                    <h1 class="text"><strong>อัพโหลดเกม</strong></h1>
                </div>
                @csrf
                <div class="form-group mb-3">

                    <label for="" class="form-label">ชื่อเกม</label>
                    <input type="text" name="title" id="title" class="form-control mb-3">

                    <label for="" class="form-label">รายละเอียด</label>
                    <input type="text" name="description" id="description" class="form-control mb-3">

                    <label for="" class="form-label">ภาพประกอบ</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control mb-3">

                    <label for="" class="form-label">ชื่อสลัก</label>
                    <input type="text" name="slug" id="slug" class="form-control mb-3">

                    <label for="" class="form-label">ไฟล์เกม</label>
                    <input type="file" name="gamefile" id="gamefile" class="form-control mb-3">

                    <div class="d-flex justify-content-center">
                        <button type="submit"class="btn btn-primary">อัพโหลด</i></button>
                    </div>

                </div>
            </form>
        </div>
    </div>


@endsection
