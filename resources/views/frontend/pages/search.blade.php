@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small style="color: orangered">Tìm thấy {{ count($data) }} kết quả  </small>
    </h1>
    <div class="row">
        @foreach($data as $item)
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


    {{ $data->links() }}
</div>
@include('layouts.frontend.footer')
