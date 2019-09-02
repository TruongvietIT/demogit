@extends('layouts.admin.master')
@section('title-page', 'Quản lý phòng')
@section('sub-title-page', 'Danh sách đặt phòng')
@section('content')
    @include('layouts.admin.message')
    <div class="table table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Thông tin khách </th>

                <th scope="col">Tên phòng</th>
                <th scope="col">Thời gian thuê</th>
                <th scope="col">Thành tiền</th>
                {{--            <th scope="col">TÌnh trạng</th>--}}
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookrooms as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>
                        {{ $item->user['name'] }}<br><span style="color: red">Email</span><br> {{ $item->user['email'] }}
                    </td>

                    <td>
                        {{ $item->rooms['name'] }}
                    </td>

                    <td>
                        {{ $item['time_start']}} <br><span style="color: red">Đến</span><br> {{ $item['time_end'] }}
                    </td>
                   <?php
                    $start_time =  \Carbon\Carbon::parse($item['time_start']);

                    $finish_time = \Carbon\Carbon::parse($item['time_end']);

                    $hours= $start_time->diffInHours($finish_time, false);

                    ?>
                    <td>
                        {{ number_format($hours * $item->rooms['price'],0,',','.') }}
                        </td>

                    <td>
                        <a @if($item->status ==0 ){{"disabled='disabled'"}}@endif onclick=" @if($item->status == 0) {{'return false'}}@else @endif" href="{{ route('bookrooms.return', $item->id) }}" class="btn btn-primary btn-sm btn-check"> Trả phòng</a>
                        <a href="{{ route('export', $item->id) }}" class="btn btn-sm btn-primary export" >In hóa đơn </a>
                        <a onclick="return confirm('Xác nhận xóa ?')" href="{{ route('bookrooms.delete', $item->id) }}" class="btn btn-danger btn-sm"> Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $bookrooms->links() }}
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $(".export").hide();
        $(".btn-check").on('click', function () {
            $(this).next(".export").show();
        });
    });
</script>
@endsection
