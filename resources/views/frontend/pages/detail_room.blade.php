@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small>{{ $room->name }}</small>


    </h1>
    <div class="row">

        <div class="col-md-8 text-justify">
            <hr>
            <hr>
            <img class="img-fluid" src="{{ asset('uploads/rooms/'.$room->image) }}" alt="" width="750px" height="500px">
            <p class="text-justify">
                {!!  $room->details !!}
            </p>
        </div>

        <div class="col-md-4">
            @include('layouts.admin.message')
            <h3 class="my-3"><strong>Đăng ký thuê phòng</strong></h3>

            <form action="{{ route('room.book_room') }}" method="post">
                @csrf
            <ul>
                <li>
                    <div class="form-group">
                        <label for="">Thời gian bắt đầu</label>
                        <input type="datetime-local" class="form-control" required name="start_time"  value="{{ old('start_time') }}">
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label for="">Thời gian Kết thúc</label>
                        <input type="datetime-local" class="form-control" required name="finish_time" value="{{ old('finish_time') }}">
                    </div>
                </li>

                <input style="display: none" type="text" name="room_id" value="{{ $room->id }}">
                <input style="display: none" type="text" name="price" value="{{ $room->price }}">

                <input style="display: none" type="text" class="form-control" required name="time_now" value="{{ \Carbon\Carbon::now()  }}">

                <div class="form-group">
                    <button class="btn btn-danger" type="submit" style="width: 100%">Đặt phòng</button>
                </div>

            </ul>
            </form>
        </div>

    </div>
    <!-- /.row -->

    @if (Auth::user())
        <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <form method="post" action="{{ route('room.comment', $room->id) }}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" rows="3" required placeholder="Nội dung bình luận..." name="contents"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    @endif
    <h3 style="color: olivedrab">Danh sách bình luận</h3>
    <hr>
@foreach($comments as $item)
    <div class="media mb-4" style="padding-left: 50px">

        <div class="media-body ">
            <h5 class="mt-0">{{  $item->user_name}} <i style="font-size: 15px"> {{ $item->created_at }}</i></h5>
            {!! $item->content !!}
        </div>
    </div>
@endforeach

    <h3 class="my-4">Tin tức nổi bật</h3>

    <div class="row">
        @foreach($posts  as $item)
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="{{ route('post.detail', $item->id) }}">
                <img class="img-fluid" src="{{ asset('uploads/posts/'.$item->image) }}" alt="">


            </a>
            <br><br>
            <a href="{{ route('post.detail', $item->id) }}">{{ $item->title }}</a>
        </div>
@endforeach

    </div>
    <!-- /.row -->

</div>
@include('layouts.frontend.footer')
