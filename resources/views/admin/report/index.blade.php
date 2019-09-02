@extends('layouts.admin.master')
@section('title-page', 'Báo cáo  ')
@section('content')
    @include('layouts.admin.message')

<h3>Top 10 phòng có doanh thu cao nhất trong tháng </h3>
<div class="row">

    <div class="col-md-10">
        {!! $chart->container() !!}
    </div>
    {!! $chart->script() !!}

</div>

@endsection
