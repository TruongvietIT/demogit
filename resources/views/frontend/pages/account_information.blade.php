@include('layouts.frontend.head')

<body>
@include('layouts.frontend.header')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Thông tin tài khoản</div>

                <div class="card-body">


                    <form method="POST" action="{{ route('pass.change') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                            @include('layouts.admin.message')
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Họ tên</label>
                            <div class="col-md-6"><input disabled id="name" type="text" name="name" value="{{ $account->name }}" required="required" autocomplete="name" autofocus="autofocus" class="form-control "></div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6"><input id="email" type="email" name="email" value="{{ $account->email }}" required="required" autocomplete="email" class="form-control " disabled=""></div>
                        </div>

                        <div id="show-form">
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu cũ</label>
                            <div class="col-md-6"><input type="password" name="password_old"  autocomplete="new-password" class="form-control" value="{{ old('password_old') }}"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu mới</label>
                            <div class="col-md-6"><input type="password" name="password_new" autocomplete="new-password" class="form-control" value="{{ old('password_new') }}"></div>
                        </div>


                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Nhập lại mật khẩu mới</label>
                                <div class="col-md-6"><input  type="password" name="password_confirmation"  autocomplete="new-password" class="form-control"></div>
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4"><button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@include('layouts.frontend.footer')


