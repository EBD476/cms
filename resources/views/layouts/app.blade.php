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
    {{--<!-- Bootstrap 3.3.7 -->--}}
    {{--@if(App::getlocale()=='fa')--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bootstrap.min.css')}}">--}}
    {{--@else--}}
    {{--<link rel="stylesheet" href="{{asset('backend/css.pro/bootstrap.min.css')}}">--}}
    {{--@endif--}}
    {{--<!-- Font Awesome -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">--}}
    {{--<!-- Ionicons -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">--}}
    {{--<!-- Theme style -->--}}
    {{--@if(app::getlocale()=='fa')--}}
    {{--<link rel="stylesheet" href="{{asset('backend/fa.css')}}">--}}
    {{--@endif--}}
    {{--<link rel="stylesheet" href="{{asset('backend/css.pro/style.css')}}">--}}
    {{--<!-- AdminLTE Skins. Choose a skin from the css/skins--}}
    {{--folder instead of downloading all of them to reduce the load. -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">--}}
    {{--<!-- Morris chart -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/morris.js/morris.css')}}">--}}
    {{--<!-- jvectormap -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/jvectormap/jquery-jvectormap.css')}}">--}}
    {{--<!-- Date Picker -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">--}}
    {{--<!-- Daterange picker -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">--}}
    {{--<!-- bootstrap wysihtml5 - text editor -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">--}}
    {{--<!-- color -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/css.pro/blue.css')}}">--}}
    {{--<!-- c3 -->--}}
    {{--<link rel="stylesheet" href="{{asset('backend/css.pro/c3.min.css')}}">--}}

    <!-- Bootstrap Core CSS -->
        <link href="{{asset('backend/css.pro/bootstrap.min.css')}}" rel="stylesheet">
        <!-- chartist CSS -->
    {{--<link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">--}}
    {{--<link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">--}}
    {{--<link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">--}}
    <!--This page css - Morris CSS -->
        <link href="{{asset('backend/css.pro/c3.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('backend/css.pro/style.css')}}" rel="stylesheet">
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
{{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--<script src="{{asset('backend/js.pro/jquery.min.js')}}"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="{{asset('backend/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
{{--$.widget.bridge('uibutton', $.ui.button);--}}
{{--</script>--}}
{{--<!-- Bootstrap 3.3.7 -->--}}
{{--<script src="{{asset('backend/js.pro/bootstrap.min.js')}}"></script>--}}
{{--<!-- c3.min -->--}}
{{--<script src="{{asset('backend/js.pro/c3.min.js')}}"></script>--}}
{{--<!-- Morris.js charts -->--}}
{{--<script src="{{asset('backend/bower_components/raphael/raphael.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/bower_components/morris.js/morris.min.js')}}"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>--}}
{{--<!-- jvectormap -->--}}
{{--<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="{{asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="{{asset('backend/bower_components/moment/min/moment.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>--}}
{{--<!-- datepicker -->--}}
{{--<script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>--}}
{{--<!-- Bootstrap WYSIHTML5 -->--}}
{{--<script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>--}}
{{--<!-- Slimscroll -->--}}
{{--<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>--}}
{{--<!-- FastClick -->--}}
{{--<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="{{asset('backend/dist/js/demo.js')}}"></script>>--}}

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
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
{{--<script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>--}}
{{--<script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>--}}
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
