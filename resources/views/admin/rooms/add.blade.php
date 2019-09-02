@extends('layouts.admin.master')
@section('title-page', 'Quản lý phòng')
@section('sub-title-page', 'Thêm phòng')
@section('content')
    @include('layouts.admin.message')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên phòng</label>
            <input type="text" name="name" class="form-control" placeholder="Tên phòng" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="">Giá phòng</label>
            <input type="text" name="price" class="form-control" placeholder="Giá phòng" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="">Diện tích</label>
            <input type="text" name="acreage" class="form-control" placeholder="Diện tích" value="{{ old('acreage') }}">
        </div>

        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" name="location" class="form-control" placeholder="Địa chỉ" value="{{ old('location') }}">
        </div>
        <div class="form-group">
            <label for="">Mô tả chi tiết</label>
            <textarea name="details" id="details" cols="30" rows="10" class="form-control" placeholder="Mô tả chi tiết">
                {{ old('details') }}
            </textarea>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('details');
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
