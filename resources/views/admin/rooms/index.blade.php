@extends('layouts.admin.master')
@section('title-page', 'Quản lý phòng')
@section('sub-title-page', 'Danh sách phòng')
@section('content')
    @include('layouts.admin.message')
    <div class="form-group">
        <a href="{{ route('rooms.get_add') }}" class="btn btn-primary">Create</a>
    </div>
    <div class="table table-responsive">
        <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh </th>
            <th scope="col">Tên phòng</th>
            <th scope="col">Diện tích</th>
            <th scope="col">Gía phòng</th>
{{--            <th scope="col">TÌnh trạng</th>--}}
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>
                <img src="{{ asset('uploads/rooms/'.$item->image) }}" alt="" width="150px" height="100px">
            </td>
            <td>{{$item->name}}</td>
            <td>{{ $item->acreage }}</td>
            <td>{{ number_format($item->price,0,',','.')  }} / 1h</td>
            <td>
                <a href="{{ route('rooms.get_edit', $item->id) }}" class="btn btn-info"> <i class="fa fa-edit"> Edit</i></a>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa ?')" href="{{ route('rooms.delete', $item->id) }}" class="btn btn-danger"> <i class="fa fa-trash"> Delete</i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        {{ $rooms->links() }}
    </div>
@endsection
