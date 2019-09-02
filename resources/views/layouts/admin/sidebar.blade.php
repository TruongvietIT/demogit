<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                    </span>
                </a>

            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Quản lý phòng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('rooms.get_add') }}"><i class="fa fa-circle-o"></i> Thêm phòng</a></li>
                    <li><a href="{{ route('rooms.list') }} "><i class="fa fa-circle-o"></i> Danh sách phòng</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('bookrooms.list') }}">
                    <i class="fa fa-th"></i> <span>Danh sách đặt phòng</span>
                    <span class="pull-right-container">
                        <?php
                        $count_book_room =  DB::table('book_rooms')->count();
                        ?>
              <small class="label pull-right bg-green">{{ $count_book_room }}</small>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Quản lý bình luận</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('comments.room_list') }}"><i class="fa fa-circle-o"></i> Bình luận phòng</a></li>
{{--                    <li><a href="{{ route('rooms.list') }} "><i class="fa fa-circle-o"></i> Danh sách phòng</a></li>--}}
                </ul>
            </li>


            <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Quản lý tin tức </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('post.get_add') }}"><i class="fa fa-circle-o"></i> Thêm tin</a></li>
                <li><a href="{{ route('post.list') }} "><i class="fa fa-circle-o"></i> Danh sách tin</a></li>
            </ul>
            </li>

            <li>
                <a href="{{ route('customer.list') }}">
                    <i class="fa fa-th"></i> <span>Khách hàng</span>
                    <span class="pull-right-container">
                        <?php
                        $users =  DB::table('users')->count();
                        ?>
              <small class="label pull-right bg-green">{{ $users }}</small>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Quản lý Slide </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('slides.get_add') }}"><i class="fa fa-circle-o"></i> Thêm slide</a></li>
                    <li><a href="{{ route('slides.list') }} "><i class="fa fa-circle-o"></i> Danh sách slide</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('report') }}">
                    <i class="fa fa-th"></i> <span>Báo cáo </span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
