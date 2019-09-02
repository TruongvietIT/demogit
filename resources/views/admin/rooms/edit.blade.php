@extends('layouts.admin.master')
@section('title-page', 'Quản lý phòng')
@section('sub-title-page', 'Sửa phòng')
@section('content')
    @include('layouts.admin.message')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên phòng</label>
            <input type="text" name="name" class="form-control" placeholder="Tên phòng" value="{{ $room->name }}">
        </div>

        <div class="form-group">
            <label for="">Giá phòng</label>
            <input type="text" name="price" class="form-control" placeholder="Giá phòng" value="{{ $room->price }}">
        </div>

        <div class="form-group">
            <label for="">Diện tích</label>
            <input type="text" name="acreage" class="form-control" placeholder="Diện tích" value="{{ $room->acreage }}">
        </div>

        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" name="location" class="form-control" placeholder="Địa chỉ" value="{{ $room->location}}">
        </div>
        <div class="form-group">
            <label for="">Mô tả chi tiết</label>
            <textarea name="details" id="details" cols="30" rows="10" class="form-control" placeholder="Mô tả chi tiết">
                {{ $room->details }}
            </textarea>

            <script>
                CKEDITOR.replace('details');
            </script>
        </div>

        <div class="form-group">
            <label for="">Hình ảnh</label><br>
            <img src="{{ asset('uploads/rooms/'.$room->image) }}" alt="" width="400px" height="250px"><br><br>
            <input type="file" name="images" value="{{ old('images') }}" >
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
