<header style="margin-bottom: 50px">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('pages.home') }}">Trang chủ</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarResponsive" style="">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list.rooms') }}">Danh sách phòng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list.post') }}">Tin tức & Sự kiện</a>
                    </li>
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-sign-in"></i>  Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> <i class="fa fa-user-plus"></i> Đăng kí</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> Tài khoản
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="{{ route('account.infor') }}">Quản lý thông tin</a>
                            <a class="dropdown-item" href="{{ route('user.list_book_room') }}">Danh sách phòng đặt</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a>
                        </div>
                    </li>
                    @endif

                    <li>
                          <form action="{{ route('search') }}" method="GET">

                                            <input type="text" style="height: 38px" placeholder="Nhập từ khóa tìm kiếm..." required name="key">
                                            <button type="submit" class="btn btn-default"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </form>
                       </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            @foreach($slides as $index=>$item)
            <li data-target="#demo" data-slide-to="{{ $index }}" class="@if($index == 0) {{ 'active' }} @endif"></li>


                @endforeach
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner" style="height: 600px">

            @foreach($slides as $index=>$item)


                <div class="carousel-item @if($index == 0) {{ 'active' }} @endif">
                <img class="img-fluid" style="width: 100%; height: 100%" src="{{ asset('uploads/slides/'.$item->links) }}" alt="Los Angeles">
            </div>
            @endforeach

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</header>

