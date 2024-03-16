@extends('layouts.app2')

@section('title' , 'صفحه مدیریت')

@section('link')
    <link rel="stylesheet" href="{{asset('vendor/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}">
@endsection

@section('content')
<body class="theme-blush">

<!-- Page Loader -->
@include('partials.page-loader')

<!-- Theme Setting -->
@include('partials.theme-setting')

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

@include('partials.top-navbar')
    <div id="megamenu" class="megamenu particles_js">
        <button class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></button>
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">تنظیمات عمومی</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span>هرکسی مرا دنبال کند</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>ایمیل تغییر مسیر</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>اطلاعیه</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span>به روز رسانی خودکار</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>آفلاین</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">لینک سریع</h6>
                        <ul class="guick_link">
                            <li><a href="#" title="">خانه</a></li>
                            <li><a href="#" title="">درباره ما</a></li>
                            <li><a href="#" title="">سوالات متداول</a></li>
                            <li><a href="#" title="">حریم خصوصی</a></li>
                            <li><a href="#" title="">نقشه سایت</a></li>
                            <li><a href="#" title="">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">تماس با ما</h6>
                        <form>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="نام را وارد کنید">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                            </div>
                            <div class="input-group mb-2">
                                <textarea  class="form-control" placeholder="پیام" rows="2"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-round">تایید</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">گالری تصویر</h6>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">قبلی</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">بعدی</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="card mt-4">
                    <div class="header">
                        <h2>سوالات متداول</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">اقدام</a></li>
                                    <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                    <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="accordion" id="accordion-faqs">
                            <div>
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-faqs" aria-expanded="true" aria-controls="collapseOne">
                                            س: نحوه استفاده از متغیرهای SCSS برای ساخت رنگ سفارشی <span class="float-right badge  badge-primary">23</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-faqs" aria-expanded="false" aria-controls="collapseTwo">
                                            س: چهار سؤال درباره استراتژی DevOps شما چیست؟ <span class="float-right badge  badge-success">8</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-faqs" aria-expanded="false" aria-controls="collapseThree">
                                            س: مقایسه مایکروسافت و مفاهیم برنامه نویسی کاربردی <span class="float-right badge  badge-danger">13</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>

@include('partials.chatbar')

    @include('partials.sidebar-right')

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>داشبورد</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                                <div class="ml-4">
                                    <span>درآمد کلی</span>
                                    <h4 class="mb-0 font-weight-medium">7805 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i></div>
                                <div class="ml-4">
                                    <span>هزینه جدید</span>
                                    <h4 class="mb-0 font-weight-medium">3651 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                                <div class="ml-4">
                                    <span>بازدید روزانه</span>
                                    <h4 class="mb-0 font-weight-medium">5,805</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i></div>
                                <div class="ml-4">
                                    <span>نرخ بیکاری</span>
                                    <h4 class="mb-0 font-weight-medium">13651 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>بازدید کنندگان سایت</h2>
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">اقدام</a></li>
                                        <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map" style="height: 245px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card-value float-right text-muted"><i class="wi wi-fog"></i></div>
                                                <h3 class="mb-1">12°C</h3>
                                                <div>لندن</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="wi wi-day-cloudy"></i></div>
                                                <h3 class="mb-1">18°C</h3>
                                                <div>نیو یورک</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="wi wi-sunrise"></i></div>
                                                <h3 class="mb-1">37°C</h3>
                                                <div>دهلی نو</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card-value float-right text-muted"><i class="icon-drawer"></i></div>
                                                <h3 class="mb-1">302</h3>
                                                <div>صندوق ورودی</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="icon-star"></i></div>
                                                <h3 class="mb-1">21</h3>
                                                <div>ستاره دار</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="icon-notebook"></i></div>
                                                <h3 class="mb-1">2</h3>
                                                <div>پیش نویس</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-muted"><i class="icon-bubbles"></i></div>
                                    <h3 class="mb-1">102</h3>
                                    <div>پیام ها</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>دنبال کنندگان جدید</h2>
                        </div>
                        <div class="body">
                            <ul class="right_chat w_followers list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@MelissaMcCoy</span>
                                                <span class="message">طراح، بلاگر</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@Joge Lucky</span>
                                                <span class="message">توسعه دهنده جاوا</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@JuanMartinez</span>
                                                <span class="message">مدیر عامل، پارادایم شیفت</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@آرش خادملو</span>
                                                <span class="message">مدیر هنری، فیلم برش</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@LouisHenry</span>
                                                <span class="message">نویسنده، مجله ویرایشگر</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/45x45" alt="">
                                            <div class="media-body">
                                                <span class="name">@آرش خادملو</span>
                                                <span class="message">مدیر هنری، فیلم برش</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>محصول</th>
                                <th>محبوبیت</th>
                                <th>تخفیف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="w60">1</th>
                                <td>محدوده دکور خانه</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-primary">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>ملزومات حمام</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>دیزنی شاهزاده خانم پینک 18 "کیسه مدرسه</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-dark">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>آیفون ایکس اس</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-danger">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>ساعت هوشمند اپل</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-warning">70%</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
</body>

@endsection

@section('script')
<script src="{{asset('bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('vendor/toastr/toastr.js"')}}></script>
<script src="{{asset('js/index.js')}}"></script>
@endsection
