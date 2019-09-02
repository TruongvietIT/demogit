@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small>Danh sách phòng đã đặt</small>
    </h1>

            <div class="table table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên phòng</th>
                        <th>Thời gian thuê</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $stt = 0;
                    @endphp
                    @foreach($data as $item)
                        @php
                            $stt++;
                        @endphp
                    <tr>
                        <td>{{ $stt }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            {{ $item->time_start}} <br><span style="color: red">Đến </span><br> {{ $item->time_end }}
                        </td>
                        <td><a onclick="return confirm('Bạn chắc chắn muốn hủy đặt phòng ?')" href="{{ route('cancel.room', $item->id_book_room) }}" class="btn btn-sm btn-danger">Hủy </a></td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>


</div>
@include('layouts.frontend.footer')
