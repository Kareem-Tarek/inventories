<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Harmattan:wght@600;700" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/prism.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}">
</head>
<body class="rtl">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('dashboard.includes.header')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        @include('dashboard.includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            @include('dashboard.includes.bookmark')
            <!-- Container-fluid starts-->
            @yield('main-content')
            @yield('content')

            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('dashboard.includes.footer')
        <!-- footer end-->
    </div>
</div>
<!-- latest jquery-->
<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('/assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('/assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('/assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('/assets/js/script.js')}}"></script>

<!-- login js-->
<!-- Plugin used-->
</body>
</html>
