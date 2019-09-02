@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small>PHÒNG HỌP – HỘI THẢO TIÊU CHUẨN QUỐC TẾ</small>
    </h1>
    <div class="row">
        @foreach($rooms as $item)
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">
                <a href="{{ route('room.detail', $item->id) }}"><img class="card-img-top" src="{{ asset('uploads/rooms/'.$item->image) }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('room.detail', $item->id) }}">{{ $item->name }}</a>
                    </h4>
                    <strong><b>Giá: {{ number_format($item->price, 0, ',', '.') }} / 1 giờ</b></strong><br>
                    <strong><b>Diện tích: {{ $item->acreage }}</b></strong>
                    <p class="card-text">{!! Str::words($item->details, '25') !!} </p>
                </div>
            </div>
        </div>
            @endforeach
    </div>

    <h1 class="my-4">

        <small style="color: orangered">Tin tức mới nhất </small>
    </h1>
    <div class="row">
        @foreach($posts  as $item)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="{{ route('post.detail', $item->id) }}"><img class="card-img-top" src="{{ asset('uploads/posts/'.$item->image) }}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('post.detail', $item->id) }}">{{ $item->title }}</a>
                        </h4>

                        <p class="card-text">{!! Str::words($item->content, '25') !!} </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@include('layouts.frontend.footer')
