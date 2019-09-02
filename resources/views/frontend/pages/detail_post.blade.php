@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">
    <!-- Example row of columns -->
    <h1 class="my-4">

        <small>{{ $post->title }}</small>


    </h1>
    <div class="row">

        <div class="col-md-9 text-justify">
            <hr>
            <hr>
{{--            <img class="img-fluid" src="{{ asset('uploads/posts/'.$post->image) }}" alt="" width="750px" height="500px">--}}
            <p class="text-justify">
                {!!  $post->content !!}
            </p>
        </div>


    </div>
    <!-- /.row -->

</div>
@include('layouts.frontend.footer')
