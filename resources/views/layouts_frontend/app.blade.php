<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        {{--<meta http-equiv="{{$setting->seo_discription}}" content="IE=edge,chrome=1" />--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
    <title>@yield('title')</title>

    <head>
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}">
        <!-- Bootstrap 3.3.7 -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/assets/css/now-ui-kit.css')}}?v=1.2.0" rel="stylesheet" />
        <link href="{{asset('frontend/frontend/now-ui-kit.min.css')}}?v=1.2.2" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('frontend/assets/demo/demo.css')}}" rel="stylesheet" />
    </head>
    @stack('css')
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <div class="main-panel">
            @if(Request::is('frontend*'))
                 @include('layouts_frontend.partial.topbar')
            @endif
                @yield('content')
            @if(Request::is('frontend*'))
               @include('layouts_frontend.partial.footer')
            @endif
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{asset('frontend/assets/js/plugins/bootstrap-switch.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('frontend/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{asset('frontend/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <script src="{{asset('frontend/frontend/now-ui-kit.min.js')}}?v=1.2.2" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
{{--    <script src="{{asset('frontend/assets/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>--}}
    <script>
        $(document).ready(function() {
            // the body of this function is in assets/js/now-ui-kit.js
            //  nowuiKit.initSliders();
        });

        // function scrollToDownload() {
        //
        //     if ($('.section-download').length != 0) {
        //         $("html, body").animate({
        //             scrollTop: $('.section-download').offset().top
        //         }, 1000);
        //     }
        // }
    </script>
    @stack('scripts')
</body>
</html>
