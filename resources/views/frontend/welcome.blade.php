@extends('layouts_frontend.app')

@section('title',__('Welcome'))

@push('css')

@endpush

@section('content')
<html lang="en">
<body class="index-page sidebar-collapse">
<div class="wrapper">
    <div class="cd-section" id="headers">
        <!--     *********     HEADER 1      *********      -->
        <div class="header-1">
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#pablo">{{__('Creative Tim')}}</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#pablo">
                                    {{__('Home')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    {{__('About Us')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    {{__('Contact Us')}}
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://twitter.com/CreativeTim">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/CreativeTim">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/CreativeTimOfficial">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header header-filter">
                @foreach($setting as $setting)
                <div class="page-header-image" style="background-image: url({{asset('upload/setting/header/'.$setting->hnt_setting_image_header)}})"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 ml-auto text-right">
                            <h1 class="title">{{__('Hanta IBMS')}}</h1>
                            <h4 class="description">{{__('Smart Home')}}</h4>
                            <br />

                            <div class="buttons">
                                <a href="{{route('frontend.project.index')}}" class="btn btn-info btn-lg mr-3">
                                    {{__('Read More')}}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--     *********    END HEADER 1      *********      -->


        <!--     *********     HEADER 2      *********      -->

        <div class="header-2">
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#pablo">{{__('Creative Tim')}}</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#pablo">
                                    {{__('Home')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    {{__('About Us')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    {{__('Products')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    {{__('Contact Us')}}
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link" href="https://twitter.com/CreativeTim">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/CreativeTim">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/CreativeTimOfficial">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="page-header header-filter">
                <div class="page-header-image"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h1 class="title">{{__('You should be here!')}} </h1>
                            <h5 class="description">5,000 capacity venue, holding some of the latest technology lighting with a 24 colour laser system Amnesia is one of the islands most legendary clubs.</h5>
                        </div>
                        <div class="col-md-10 ml-auto mr-auto">
                            <div class="card card-raised card-form-horizontal card-plain" data-background-color>
                                <div class="card-body">
                                    <form method="" action="">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" value="" placeholder="Full Name" class="form-control" autocomplete="family-name" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Your Email" class="form-control" autocomplete="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" class="form-control" autocomplete="current-password" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="button" class="btn btn-primary btn-round btn-block">Join Us</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--     *********    END HEADER 2      *********      -->


        <!--     *********     HEADER 3      *********      -->

        <div class="header-3">
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#pablo">{{__('Hanta IBMS')}}</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#pablo">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="page-header header-filter">
                            @foreach($project as $project)
                            <div class="page-header-image" style="background-image: url({{asset('upload/project/'.$project->hp_project_image)}});"></div>
                            @endforeach
                            <div class="content-center">
                                <div class="container text-left">
                                    <div class="content-center">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="iframe-container">
                                                    <iframe height="250" src="https://www.youtube.com/embed/rmfmdKOLzVI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ml-auto mr-auto text-right">
                                                <h1 class="title">On the run tour.</h1>
                                                <h4 class="description ">On the Run Tour: Beyoncé and Jay Z is a 2014 concert special which documents the September 12 and 13, 2014, shows of American singers' Beyoncé and Jay-Z joint co-headlining venture On the Run Tour.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($product as  $key=>$product)
                    <div class="carousel-item">
                        <div class="page-header header-filter">
                            <div class="page-header-image" style="background-image:  url({{asset('upload/product/'.$product->hp_product_image)}});"></div>
                            <div class="content-center">
                                <div class="container">
                                    <div class="content-center">
                                        <div class="row">
                                            <div class="col-md-8 ml-auto mr-auto text-center">
                                                <h1 class="title">{{$product->hp_product_name}}</h1>
                                                <h4 class="description ">{{$product->hp_product_description}}</h4>
                                                <br />
                                                <h5>{{__('visit Page:')}}</h5>
                                                <div class="buttons">
                                                    <a href="{{route('frontend.product.index')}}" class="btn btn-icon btn-neutral btn-danger btn-round mt-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
            </div>
        </div>

        <!--     *********    END HEADER 3      *********      -->
        <!--  ************    carousel   *************   -->
        <div class="section" id="carousel">
            <div class="container">
                <div class="title">
                        <h4>{{__('Slider')}}</h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">

                                <div class="carousel-item active">

                                    <img class="d-block" src="{{asset('upload/slider/1.JPG')}}" alt="First slide">

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Nature, United States</h5>
                                    </div>
                                </div>

                                @foreach($slider as $key=>$slider)
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('upload/slider/'.$slider->image)}}" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Somewhere Beyond, United States</h5>
                                    </div>
                                </div>
                                    @endforeach
                                <div class="carousel-item">
                                    <img class="d-block" src="{{asset('frontend/assets/img/bg4.jpg')}}" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Yellowstone National Park, United States</h5>
                                    </div>

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
</div>
        <div class="section">
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col-md-12 col-lg-8">
                        <h2 class="title">Completed with examples</h2>
                        <h5 class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-download" id="#download-section" data-background-color="black">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="demo">
                   111
                    </div>
                </div>
                <br>
                <br>
                <br>
                {{--<div class="row text-center mt-5">--}}
                    {{--<div class="col-md-8 ml-auto mr-auto">--}}
                        {{--<h2>Want more?</h2>--}}
                        {{--<h5 class="description">We've just launched--}}
                            {{--<a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h5>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">--}}
                            {{--<i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
                <br>
                <br>
                <div class="row justify-content-md-center sharing-area text-center">
                    <div class="text-center col-md-12 col-lg-8">
                        <h3>Thank you for supporting us!</h3>
                    </div>
                    <div class="text-center col-md-12 col-lg-8">
                        <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-profile">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Always have an access to your profile</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-neutral">Back</button>
                    <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

@push('scripts')
    <!-- Visual Inspector Plugin -->
    {{--<script type="text/javascript">--}}
        {{--(function (g) {--}}
            {{--var s = document.createElement('script'),--}}
                {{--t = document.getElementsByTagName('script')[0];--}}
            {{--s.async = true;--}}
            {{--s.src = g + '?v=' + (new Date()).getTime();--}}
            {{--s.charset = 'UTF-8';--}}
            {{--s.setAttribute('crossorigin', '*');--}}
            {{--t.parentNode.insertBefore(s, t);--}}
        {{--})('https://www.canvasflip.com/plugins/vi/vi.min.js');--}}
    {{--</script>--}}
    <!-- Google Tag Manager -->
    {{--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
                {{--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
            {{--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
            {{--'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
        {{--})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>--}}
    <!-- End Google Tag Manager -->
    <!--   Core JS Files   -->
{{--    <script src="{{asset('frontend/frontend/jquery.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('frontend/frontend/popper.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('frontend/frontend/bootstrap.min.js')}}" type="text/javascript"></script>--}}

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
{{--    <script src="{{asset('frontend/frontend/bootstrap-switch.js')}}"></script>--}}

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{{--    <script src="{{asset('frontend/frontend/nouislider.min.js')}}" type="text/javascript"></script>--}}

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="{{asset('frontend/frontend/moment.min.js')}}"></script>

    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('frontend/frontend/bootstrap-tagsinput.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('frontend/frontend/bootstrap-selectpicker.js')}}" type="text/javascript"></script>

    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset('frontend/frontend/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->

    {{--<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>--}}


    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->

    <!-- Sharrre libray -->
    {{--<script src="{{asset('frontend/frontend/jquery.sharrre.js')}}"></script>--}}

    <script>
        $(document).ready(function(){
            // if($('.facebook-sharrre').length != 0){
            //     $('.facebook-sharrre').sharrre({
            //         share: {
            //             facebook: true
            //         },
            //         enableHover: false,
            //         enableTracking: false,
            //         enableCounter: false,
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('facebook');
            //         },
            //         template: '<i class="fa fa-facebook-square"></i>',
            //         url: ''
            //     });
            // }
            //
            // if($('.facebook-sharrre-nav').length != 0){
            //     $('.facebook-sharrre-nav').sharrre({
            //         share: {
            //             facebook: true
            //         },
            //         enableHover: false,
            //         enableTracking: false,
            //         enableCounter: false,
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('facebook');
            //         },
            //         template: '<i class="fa fa-facebook-square"></i><p class="hidden-lg-up">Facebook</p>',
            //         url: ''
            //     });
            // }
            // if($('.linkedin-sharrre').length != 0){
            //     $('.linkedin-sharrre').sharrre({
            //         share: {
            //             linkedin: true
            //         },
            //         enableCounter: false,
            //         enableHover: false,
            //         enableTracking: false,
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('linkedin');
            //         },
            //         template: '<i class="fa fa-linkedin"></i>',
            //         url: 'http://demos.creative-tim.com/now-ui-kit-pro/presentation.html'
            //     });
            // }
            //
            // if($('.linkedin-sharrre-nav').length != 0){
            //     $('.linkedin-sharrre-nav').sharrre({
            //         share: {
            //             linkedin: true
            //         },
            //         enableCounter: false,
            //         enableHover: false,
            //         enableTracking: false,
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('linkedin');
            //         },
            //         template: '<i class="fa fa-linkedin"></i><p class="hidden-lg-up">LinkedIn</p>',
            //         url: 'http://demos.creative-tim.com/now-ui-kit-pro/presentation.html'
            //     });
            // }
            //
            // if($('.twitter-sharrre').length != 0){
            //     $('.twitter-sharrre').sharrre({
            //         share: {
            //             twitter: true
            //         },
            //         enableHover: false,
            //         enableTracking: false,
            //         enableCounter: false,
            //         buttons: { twitter: {via: 'CreativeTim'}},
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('twitter');
            //         },
            //         template: '<i class="fa fa-twitter"></i>',
            //         url: ''
            //     });
            // }
            //
            // if($('.twitter-sharrre-nav').length != 0){
            //     $('.twitter-sharrre-nav').sharrre({
            //         share: {
            //             twitter: true
            //         },
            //         enableHover: false,
            //         enableTracking: false,
            //         enableCounter: false,
            //         buttons: { twitter: {via: 'CreativeTim'}},
            //         click: function(api, options){
            //             api.simulateClick();
            //             api.openPopup('twitter');
            //         },
            //         template: '<i class="fa fa-twitter"></i><p class="hidden-lg-up">Twitter</p>',
            //         url: ''
            //     });
            // }
            //
            //
            // var _gaq = _gaq || [];
            // _gaq.push(['_setAccount', 'UA-46172202-1']);
            // _gaq.push(['_trackPageview']);
            //
            // (function() {
            //     var ga = document.createElement('script');
            //     ga.type = 'text/javascript';
            //     ga.async = true;
            //     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            //     var s = document.getElementsByTagName('script')[0];
            //     s.parentNode.insertBefore(ga, s);
            // })();
            //
            // // Facebook Pixel Code Don't Delete
            // !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            //     n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            //     n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            //     t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            //     document,'script','//connect.facebook.net/en_US/fbevents.js');
            //
            // try{
            //     fbq('init', '111649226022273');
            //     fbq('track', "PageView");
            //
            // }catch(err) {
            //     console.log('Facebook Track Error:', err);
            // }

        });
    </script>
    <script src={{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}></script>
    <script src={{asset('persianumber.js')}}></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.demo').persiaNumber();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.demo').persiaNumber('ar');
        });
    </script>

@endpush