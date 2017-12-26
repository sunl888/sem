<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@section('title')经管学院 @show</title>
    <meta name="description" content="@section('description')@show">
    <meta name="keywords" content="@section('keywords')@show">
    <link rel="stylesheet" type="text/css" href="{{cdn('sem/lib/slick/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{cdn('sem/lib/slick/slick-theme.min.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="{{cdn('sem/lib/bootstrap/bootstrap.min.css')}}">--}}
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{cdn('sem/css/comm.css')}}">
    @yield('css')
</head>
<body>
@yield('content')
<!-- 底部导航 -->
@include(THEME_NP.'layouts.particals.footer')
<script src="{{cdn('sem/lib/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{cdn('sem/lib/slick/slick.min.js')}}"></script>
@yield('js')
@stack('js')
</body>
</html>