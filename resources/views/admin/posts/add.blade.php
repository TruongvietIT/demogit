@extends('layouts.admin.master')
@section('title-page', 'Quản lý tin tức  ')
@section('sub-title-page', 'Thêm bài viết ')
@section('content')
    @include('layouts.admin.message')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tiều đề</label>
            <input type="text" name="name" class="form-control" placeholder="Tiều đề" value="{{ old('name') }}">
        </div>


        <div class="form-group">
            <label for="">Nội dung </label>
            <textarea name="contents" id="content" cols="30" rows="10" class="form-control" placeholder="Nhập nôi dung">
                {{ old('content') }}
            </textarea>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('content');
            </script>
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
