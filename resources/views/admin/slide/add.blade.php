@extends('layouts.admin.master')
@section('title-page', 'Quản lý Slide ')
@section('sub-title-page', 'Thêm Slide ')
@section('content')
    @include('layouts.admin.message')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tiêu đề </label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
        </div>


        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" name="images" value="{{ old('images') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
