<!doctype html>
<html lang="fa">
    <head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate-css/vivify.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.min.css')}}">

    @yield('link')

</head>

    <body class="theme-blush" style="direction: rtl !important;">

        @include('partials.validation-err')

        @yield('content')






        @yield('script')

        <script src="{{asset('vendor/particlesjs/particles.min.js')}}"></script>
        <script src="{{asset('bundles/libscripts.bundle.js')}}"></script>
        <script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script>
        <script src="{{asset('bundles/mainscripts.bundle.js')}}"></script>
        <script src="{{asset('js/pages/particlesjs.js')}}"></script>
    </body>
</html>
