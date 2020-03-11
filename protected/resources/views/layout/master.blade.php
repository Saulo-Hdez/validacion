<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>:: {{ config('app.name') }} :: @yield('title')</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    @yield('meta')

    @stack('before-styles')

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    @stack('after-styles')
    @if (trim($__env->yieldContent('page-styles')))
        @yield('page-styles')
    @endif

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
</head>

<?php
    $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
    $theme = "theme-blue";
    $menu = "";
    if ($setting == 'p') {
        $theme = "theme-orange";
    } else if ($setting == 'b') {
        $theme = "theme-blue";
    } else if ($setting == 'g') {
        $theme = "theme-green";
    } else if ($setting == 'c') {
        $theme = "theme-cyan";
    } else if ($setting == 'bl') {
        $theme = "theme-blush";
    } else {
            $theme = "theme-purple";
    }
    $theme = "theme-blue";
?>

<body class="<?= $theme ?>">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('/assets/images/logo.svg') }}" width="48" height="48" alt="InfiniO"></div>
        <p>Cargando...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
@include('layout.navbar')
<!-- Main Left sidebar menu -->
@include('layout.sidebar')
<!-- Right Sidebar setting menu -->
<!-- @include('layout.rightsidebar') -->

<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="block-header">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <h2>@yield('title')</h2>
                                    <ul class="breadcrumb p-l-0 p-b-0 ">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                                        @if (trim($__env->yieldContent('parentPageTitle')))
                                            <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                                        @endif
                                        @if (trim($__env->yieldContent('title2')))
                                            <li class="breadcrumb-item">@yield('title2')</li>
                                        @endif
                                        @if (trim($__env->yieldContent('title')))
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        @endif
                                    </ul>
                                </div>
                                @yield('sub-header')
                            </div>
                        </div>
                        @yield('sub-action-bar')
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</section>

@yield('page-popup')

<!-- Scripts -->
@stack('before-scripts')
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

@stack('after-scripts')

@if (trim($__env->yieldContent('page-script')))
    @yield('page-script')
@endif
</body>
</html>
