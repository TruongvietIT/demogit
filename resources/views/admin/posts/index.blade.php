@extends('layouts.admin.master')
@section('title-page', 'Quản lý tin tức ')
@section('sub-title-page', 'Danh sách tin tức')
@section('content')
    @include('layouts.admin.message')
    <div class="table table-responsive">
        <div class="form-group">
            <a href="{{ route('post.get_add') }}" class="btn btn-primary">Create</a>
        </div>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Hình ảnh </th>

                <th scope="col">Tiêu đề </th>

                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>
                        <img src="{{ asset('uploads/posts/'.$item->image) }}" alt="" width="150px" height="100px">
                    </td>
                    <td>
                        {{ $item->title }}
                    </td>


                    <td>
                        <a href="{{ route('posts.get_edit', $item->id) }}" class="btn btn-primary btn-sm"> Sửa</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa? ')" href="{{ route('posts.delete', $item->id) }}" class="btn btn-danger btn-sm"> Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection
