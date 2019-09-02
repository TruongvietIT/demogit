@include('layouts.admin.head')
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('layouts.admin.header')
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->

@include('layouts.admin.sidebar')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('title-page')
                <small>@yield('sub-title-page')</small>
            </h1>
{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--                <li><a href="#">Examples</a></li>--}}
{{--                <li class="active">Blank page</li>--}}
{{--            </ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                <div class="box-body">
                    @yield('content')
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

   @include('layouts.admin.footer')
