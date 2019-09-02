@extends('layouts.admin.master')
@section('title-page', 'Quản lý bình luận')
@section('sub-title-page', 'Danh sách bình luận')
@section('content')
    @include('layouts.admin.message')
    <div class="table table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên </th>
                <th scope="col">Tên phòng</th>

                <th scope="col">NỘi dung</th>
                <th scope="col">Thời gian</th>
                {{--            <th scope="col">TÌnh trạng</th>--}}
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{  $item->user_name}}</td>
                    <td>{{  $item->name}}</td>
                    <td>{{  $item->content}}</td>
                    <td>{{  $item->created_at}}</td>
                    <td>
                        <a href="{{ route('comments.delete', $item->comment_id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $comments->links() }}
    </div>
@endsection
