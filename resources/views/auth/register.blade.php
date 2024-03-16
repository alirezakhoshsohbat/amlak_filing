@extends('layouts.app2')

@section('title' , 'ثبت نام در سایت')

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
                    <p class="lead">ایجاد یک حساب کاربری</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" method="post" action="{{route('auth.register')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control round" placeholder="نام شما">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control round" placeholder="ایمیل شما">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control round" placeholder="رمزعبور">
                        </div>
                        <button type="submit"  class="btn btn-primary btn-round btn-block">ثبت نام</button>
                    </form>
                    <div class="separator-linethrough"><span>یا</span></div>
                    <button class="btn btn-round btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> ورود به سیستم با فیس بوک</button>
                    <button class="btn btn-round btn-signin-social"><i class="fa fa-twitter twitter-color"></i> ورود به سیستم با توییتر</button>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
@endsection
