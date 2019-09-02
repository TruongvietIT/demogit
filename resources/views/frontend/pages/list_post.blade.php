@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small>Danh sách tin tức</small>
    </h1>
    <div class="row">
        @foreach($posts as $item)
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

   {{ $posts->links() }}

</div>
@include('layouts.frontend.footer')
