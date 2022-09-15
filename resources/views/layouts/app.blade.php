<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>{{--{{ config('app.name', 'Laravel') }}--}}NillysAI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="_token" content="{{csrf_token()}}" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('administration/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/components-md.css') }}" rel="stylesheet" type="text/css" />

    @yield('stylesheets')
    <link rel="icon" href="{{ asset('front/img/favicon.ico') }}" type="image/png">
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
@include('back.layouts.header')

<div class="clearfix"> </div>
<div class="page-container">
    @include('back.layouts.menu')
    <div class="page-content-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
</div>
<div class="page-footer">
    <div class="page-footer-inner"> {{ now()->year }} &copy; NillysAI.</div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('administration/js/app.js') }}" type="text/javascript"></script>

@yield('javascripts')
</body>

</html>
