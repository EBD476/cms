<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <head>

        <link href="{{asset('backend/css.pro/bootstrap.min.css')}}" rel="stylesheet">
        @if(app::getlocale()=='fa')
            <link rel="stylesheet" href="{{asset('backend/style-rtl.css')}}">
        @else
            <link href="{{asset('backend/css.pro/style.css')}}" rel="stylesheet">

    @endif
    <!-- Bootstrap Core CSS -->

        <link href="{{asset('backend/css.pro/c3.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <!-- You can change the theme colors from here -->
        <link href="{{asset('backend/css.pro/blue.css')}}" rel="stylesheet">


        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    @stack('css')
</head>
<body>
<div id="app">
    <div class="main-wrapper">
        @if(Request::is('admin*'))
            @include('layouts.partial.topbar')
        @endif
        @if(Request::is('admin*'))
            @include('layouts.partial.sidebar')
        @endif
        @yield('content')
        @if(Request::is('admin*'))
            @include('layouts.partial.footer')
        @endif
    </div>
</div>

<script src="{{asset('backend/js.pro/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend/js.pro/popper.min.js')}}"></script>
<script src="{{asset('backend/js.pro/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('backend/js.pro/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('backend/js.pro/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('backend/js.pro/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('backend/js.pro/sticky-kit.min.js')}}"></script>
<script src="{{asset('backend/js.pro/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend/js.pro/custom.min.js')}}"></script>
<!--c3 JavaScript -->
<script src="{{asset('backend/js.pro/d3.min.js')}}"></script>
<script src="{{asset('backend/js.pro/c3.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('backend/js.pro/dashboard1.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('backend/js.pro/jQuery.style.switcher.js')}}"></script>
@stack('scripts')
</body>
</html>
