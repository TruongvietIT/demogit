@extends('layouts.admin.master')
@section('title-page', 'Quản lý khách hàng')
@section('sub-title-page', 'Danh sách khách hàng ')
@section('content')
    @include('layouts.admin.message')
    <div class="table table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ Tên </th>
                <th scope="col">Email </th>


                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{  $item->name}}</td>
                    <td>{{  $item->email }}</td>

                    <td>
                        <a href="{{ route('customer.delete', $item->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
