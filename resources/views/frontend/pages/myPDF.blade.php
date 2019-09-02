<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Thông tin hóa đơn</title>
{{--    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <style>
        tr td{
            padding-right: 50px;
        }
    </style>
</head>
<body>
<h1 style="margin-left: 100px">Thông tin hóa đơn </h1>

<div class="table table-responsive">
    <?php
    $data = DB::table('book_rooms')
        ->select('book_rooms.*','book_rooms.id as id_book_room','rooms.*')
        ->join('rooms', 'book_rooms.id_room', '=', 'rooms.id')
        ->where('id_user', '=', Auth::user()->id)->get();
    ?>
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
                    {{ $item->time_start}} <br><span style="color: red">Đến</span><br> {{ $item->time_end }}
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>

