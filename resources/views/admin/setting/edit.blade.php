@extends('layouts.app')

@section('title',__('Setting'))

@push('css')
    <link href="{{asset('backend/css.pro/steps.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="page-wrapper" style="min-height: 177px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row page-titles">
                {{--<div class="col-md-5 col-8 align-self-center">--}}
                {{--<h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3>--}}
                {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item">--}}
                {{--<a href="javascript:void(0)">Home</a>--}}
                {{--</li>--}}
                {{--<li class="breadcrumb-item active">Table Data table</li>--}}
                {{--</ol>--}}
                {{--</div>--}}
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            {{--<div class="chart-text m-r-10">--}}
                            {{--<h6 class="m-b-0">--}}
                            {{--<small>THIS MONTH</small>--}}
                            {{--</h6>--}}
                            {{--<h4 class="m-t-0 text-info">$58,356</h4>--}}
                            {{--</div>--}}
                            {{--<div class="spark-chart">--}}
                            {{--<div id="monthchart">--}}
                            {{--<canvas width="60" height="35"--}}
                            {{--style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            {{--<div class="chart-text m-r-10">--}}
                            {{--<h6 class="m-b-0">--}}
                            {{--<small>LAST MONTH</small>--}}
                            {{--</h6>--}}
                            {{--<h4 class="m-t-0 text-primary">$48,356</h4>--}}
                            {{--</div>--}}
                            {{--<div class="spark-chart">--}}
                            {{--<div id="lastmonthchart">--}}
                            {{--<canvas width="60" height="35"--}}
                            {{--style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                                <i class="ti-settings text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    {{__('Setting')}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="{{route('setting.index')}}">{{__('Setting')}}</a></li>
                </ol>
            </section>

            <!-- /.content-wrapper -->
            <!-- Main content -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <section class="content">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-10">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                {{--<h3 class="box-title">{{__('Setting')}}</h3>--}}
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">&nbsp&nbsp{{__('SEO Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Company Details')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Mail Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab4" aria-controls="3" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Footer Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab5" aria-controls="4" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Access Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab6" aria-controls="5" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Terms Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab7" aria-controls="6" role="tab" data-toggle="tab">&nbsp&nbsp{{__('Google Setting')}}&nbsp</a>&nbsp
                                                    </li>
                                                </ul>
                                                <form method="post" action="{{route('setting.update',$setting->id)}}" id="myTabContent" class="tab-content setting-tab" enctype="multipart/form-data">
                                                    <div role="tabpanel"  class="tab-pane active" id="tab1" >
                                                        @csrf
                                                        @method('PUT')
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Logo')}}</label>
                                                            <input type="file" class="form-control" id="exampleInputFile" name="logo" value="{{$setting->logo}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Image Header')}}</label>
                                                            <input type="file" class="form-control" id="exampleInputFile" name="hnt_setting_image_header" value="{{$setting->hnt_setting_image_header}}">
                                                        </div>
                                                        <!--col-lg-10-->
                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Favicon')}}</label>
                                                            <input type="file" class="form-control" id="exampleInputFile" placeholder="{{__('Favicon')}}" name="favicon">
                                                        </div>
                                                        <!--col-lg-10-->
                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo Title')}}</label>
                                                                <textarea type="text" class="form-control" placeholder="{{__('Seo Title')}}" id="exampleInputFile" name="seo_title">{{$setting->seo_title}}</textarea>
                                                            </div>
                                                            <!--col-lg-10-->
                                                        </div>
                                                        <!--form control-->

                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo keyword')}}</label>
                                                                <textarea type="text" class="form-control" placeholder="{{__('Seo keyword')}}" id="exampleInputFile" name="seo_keyword">{{$setting->seo_keyword}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo Description')}}</label>
                                                                <textarea type="text" class="form-control"  id="exampleInputFile" name="seo_description">{{$setting->seo_description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab2">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Company Contact')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="company_contact" value="{{$setting->company_contact}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Company Address')}}</label>
                                                            <textarea type="text" class="form-control"  id="exampleInputFile" name="company_address">{{$setting->company_address}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab3">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('From Name')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="from_name" value="{{$setting->from_name}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('From Email')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="from_email" value="{{$setting->from_email}}">
                                                        </div>
                                                        <!--form control-->
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab4">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Copyright Text')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="copyright_text" value="{{$setting->copyright_text}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Footer Text')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="footer_text" value="{{$setting->footer_text}}">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab5">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Facebook')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="facebook" value="{{$setting->facebook}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Linkedin')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="linkedin", value="{{$setting->linkedin}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Twitter')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="twitter" value="{{$setting->twitter}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Google')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="google" value="{{$setting->google}}">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab6">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Terms')}}</label>
                                                            <input type="text" class="form-control" id="exampleInputFile" name="terms" value="{{$setting->terms}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Disclaimer')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="disclaimer" value="{{$setting->disclaimer}}">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab7">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Google Analytics')}}</label>
                                                            <input type="text" class="form-control"  id="exampleInputFile" name="google_analytics" value="{{$setting->google_analytics}}">
                                                        </div>
                                                        <!--form control-->
                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('backend/js.pro/jquery.validate.min.js')}}"></script>
    <script>
        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

            }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
    <script src="{{asset('backend/js.pro/jquery.steps.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend/js.pro/moment.js')}}"></script>
@endpush