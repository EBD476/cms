@extends('layouts_frontend.app')

@section('title',__('FAQ'))

@push('css')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('frontend/faq/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('frontend/faq/css/style.css')}}"> <!-- Resource style -->
@endpush

@section('content')
    <html lang="en" class="no-js">
    <body class="index-page sidebar-collapse">
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="{{asset('frontend/assets/img/now-logo.png')}}" alt="">
                    <h1 class="h1-seo">{{__('FAQ')}}</h1>
                    <h3>{{__('Look All Question And Answer')}}</h3>
                </div>
            </div>
        </div>
        <section class="cd-faq">
            @foreach($counter as $counter)
                <ul class="cd-faq-categories">
                    <li><a class="selected" href="#{{$counter->type}}">{{$counter->type}}</a></li>
                </ul> <!-- cd-faq-categories -->
            @endforeach
            @foreach($faq as $faq)
            <div class="cd-faq-items">
                <ul id="{{$faq->type}}" class="cd-faq-group">
                        <li class="cd-faq-title"><h2>{{$faq->type}}</h2></li>
                        <li>
                            <a class="cd-faq-trigger" href="#0">{{$faq->question}}</a>
                            <div class="cd-faq-content">
                                <p> {{$faq->answer}}</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                </ul>
            </div> <!-- cd-faq-items -->
            <a href=#0" class="cd-close-panel">{{__('Close')}}</a>
            @endforeach
        </section>
    </div>
    </body>
</html>
@endsection

@push('scripts')
    <script src="{{asset('frontend/faq/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('frontend/faq/js/jquery.mobile.custom.min.js')}}"></script>
    <script src="{{asset('frontend/faq/js/main.js')}}"></script> <!-- Resource jQuery -->
@endpush

