@extends('layouts.app2')

@section('title' , 'ورود به سایت')

@section('content')
    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="#">فایل رسان</a>
            </div>
            <div class="card">
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
                <div class="header">
                    <p class="lead">وارد حساب کاربری خود شوید</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">ایمیل</label>
                            <input type="email" name="email" class="form-control round" id="signin-email" placeholder="ایمیل">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">رمزعبور</label>
                            <input type="password" name="password" class="form-control round" id="signin-password" placeholder="رمزعبور">
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>مرا به خاطر بسپار</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">ورود</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">رمز عبور را فراموش کرده اید؟</a></span>
                            <span>حساب کاربری ندارید؟ <a href="{{route('register')}}">ثبت نام</a></span>
                        </div>
                    </form>
                    @include('partials.validation-err')
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
@endsection
