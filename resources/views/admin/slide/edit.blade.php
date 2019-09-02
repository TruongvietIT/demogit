@extends('layouts.admin.master')
@section('title-page', 'Quản lý Slide ')
@section('sub-title-page', 'Thêm Slide ')
@section('content')
    @include('layouts.admin.message')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tiêu đề </label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $slide->title }}">
        </div>


        <div class="form-group">
            <label for="">Hình ảnh</label><br>
            <img src="{{ asset('uploads/slides/'.$slide->links) }}" alt="" width="250px" height="150px">

            <br><br>
            <input type="file" name="images" value="{{ old('images') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
