@extends('layouts.admin.master')
@section('title-page', 'Trang quản trị ')

@section('content')
    @include('layouts.admin.message')
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $rooms }}</h3>

                <p>Phòng</p>
            </div>
            <div class="icon">
                <i class="fa fa-hospital-alt"></i>
            </div>
            <a href="{{ route('rooms.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$book_rooms}}</h3>

                <p>Danh sách đặt phòng </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('bookrooms.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $customer }}</h3>

                <p>Khách hàng </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('customer.list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $comments }}</h3>

                <p>Bình luận </p>
            </div>
            <div class="icon">
                <i class="fa fa-comments"></i>
            </div>
            <a href="{{route('comments.room_list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $posts }}</h3>

                <p>Tin tức </p>
            </div>
            <div class="icon">
                <i class="fa fa-news"></i>
            </div>
            <a href="{{ route('post.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $slide }}</h3>

                <p>Slide </p>
            </div>
            <div class="icon">
                <i class="fa fa-sliders"></i>
            </div>
            <a href="{{ route('slides.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

@endsection
