<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Thông tin hóa đơn</title>
    {{--    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <style>
        tr td{
            padding-right: 50px;
        }
        body {
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
<h1 style="margin-left: 100px">Thông tin hóa đơn </h1>

<div class="table table-responsive">
    <?php
    $data = DB::table('book_rooms')
        ->select('book_rooms.*','book_rooms.id as id_book_room','rooms.*', 'rooms.name as room_name' ,'users.*', 'users.name as user_name')
        ->join('rooms', 'book_rooms.id_room', '=', 'rooms.id')
        ->join('users', 'book_rooms.id_user', '=', 'users.id')
        ->where('book_rooms.id', '=', $id)->first();

//    dd($data);
    ?>
    <p>Tên khách hàng: {{ $data->name}}</p>
    <p>Email: {{ $data->email}}</p>

    <p>Tên phòng: {{ $data->room_name}}</p>
    <p>Giờ thuê: {{ $data->time_start}} đến {{ $data->time_end }}</p>

        <p>Giá tiền : {{ number_format($data->price,0,',','.')}}</p>

</div>

</body>
</html>

