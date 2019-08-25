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
                    {{__('Insert Setting')}}
                    <small>{{__('Preview')}}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Forms')}}</a></li>
                    <li class="active">{{__('General Elements')}}</li>
                </ol>
            </section>

            <!-- /.content-wrapper -->
            <!-- Main content -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <h4 class="card-title">Step wizard</h4>
                            <h6 class="card-subtitle">You can find the
                                <a href="http://www.jquery-steps.com" target="_blank">offical website</a>
                            </h6>
                            <form action="#" class="tab-wizard wizard-circle wizard clearfix" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="step">1</span> Personal Info</a></li><li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="step">2</span> Job Status</a></li><li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="step">3</span> Interview</a></li><li role="tab" class="last current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="current-info audible">current step: </span><span class="step">4</span> Remark</a></li></ul></div><div class="content clearfix">
                                    <!-- Step 1 -->
                                    <h6 id="steps-uid-0-h-0" tabindex="-1" class="title">Personal Info</h6>
                                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">First Name :</label>
                                                    <input type="text" class="form-control" id="firstName1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Last Name :</label>
                                                    <input type="text" class="form-control" id="lastName1"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailAddress1">Email Address :</label>
                                                    <input type="email" class="form-control" id="emailAddress1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phoneNumber1">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="phoneNumber1"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location1">Select City :</label>
                                                    <select class="custom-select form-control" id="location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="Amsterdam">India</option>
                                                        <option value="Berlin">USA</option>
                                                        <option value="Frankfurt">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date1">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="date1"> </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6 id="steps-uid-0-h-1" tabindex="-1" class="title">Job Status</h6>
                                    <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle1">Job Title :</label>
                                                    <input type="text" class="form-control" id="jobTitle1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="videoUrl1">Company Name :</label>
                                                    <input type="text" class="form-control" id="videoUrl1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription1">Job Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Interview</h6>
                                    <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="int1">Interview For :</label>
                                                    <input type="text" class="form-control" id="int1"> </div>
                                                <div class="form-group">
                                                    <label for="intType1">Interview Type :</label>
                                                    <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Location :</label>
                                                    <select class="custom-select form-control" id="Location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control" id="jobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Employee</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Membership</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6 id="steps-uid-0-h-3" tabindex="-1" class="title current">Remark</h6>
                                    <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body current" aria-hidden="false" style="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label ml-0">1 star</span>
                                                        </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label ml-0">2 star</span>
                                                        </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label ml-0">3 star</span>
                                                        </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label ml-0">4 star</span>
                                                        </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label ml-0">5 star</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="" aria-disabled="false"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="true" aria-disabled="true" class="disabled" style="display: none;"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="false" style=""><a href="#finish" role="menuitem">Submit</a></li></ul></div></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{--<h4 class="card-title">Basic Material inputs</h4>--}}
    {{--<h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.--}}
    {{--</h6>--}}

    {{--<section class="content">--}}
    {{--<div class="row">--}}
    {{--<!-- left column -->--}}
    {{--<div class="col-md-10">--}}
    {{--<!-- general form elements -->--}}
    {{--<div class="box box-primary">--}}
    {{--<div class="box-header with-border">--}}
    {{--<h3 class="box-title">{{__('Setting')}}</h3>--}}
    {{--</div>--}}
    {{--<!-- /.box-header -->--}}
    {{--<div class="box-body">--}}
    {{--<ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">--}}
    {{--<li role="presentation" class="active">--}}
    {{--<a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">{{__('SEO Setting')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">{{__('Company Details')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">{{__('Mail Setting')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab4" aria-controls="3" role="tab" data-toggle="tab">{{__('Footer Setting')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab5" aria-controls="4" role="tab" data-toggle="tab">{{__('Access Setting')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab6" aria-controls="5" role="tab" data-toggle="tab">{{__('Terms Setting')}}</a>--}}
    {{--</li>--}}
    {{--<li role="presentation">--}}
    {{--<a href="#tab7" aria-controls="6" role="tab" data-toggle="tab">{{__('Google Setting')}}</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<form method="post" action="{{route('setting.update',$setting->id)}}" id="myTabContent" class="tab-content setting-tab" enctype="multipart/form-data">--}}
    {{--<div role="tabpanel"  class="tab-pane active" id="tab1" >--}}
    {{--@csrf--}}
    {{--@method('PUT')--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Logo')}}</label>--}}
    {{--<input type="file" class="form-control" id="exampleInputFile" name="logo" value="{{$setting->logo}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Image Header')}}</label>--}}
    {{--<input type="file" class="form-control" id="exampleInputFile" name="hnt_setting_image_header" value="{{$setting->hnt_setting_image_header}}">--}}
    {{--</div>--}}
    {{--<!--col-lg-10-->--}}
    {{--<!--form control-->--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Favicon')}}</label>--}}
    {{--<input type="file" class="form-control" id="exampleInputFile" placeholder="{{__('Favicon')}}" name="favicon">--}}
    {{--</div>--}}
    {{--<!--col-lg-10-->--}}
    {{--<!--form control-->--}}
    {{--<div class="form-group">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Seo Title')}}</label>--}}
    {{--<input type="text" class="form-control" placeholder="{{__('Seo Title')}}" id="exampleInputFile" name="seo_title" value="{{$setting->seo_title}}">--}}
    {{--</div>--}}
    {{--<!--col-lg-10-->--}}
    {{--</div>--}}
    {{--<!--form control-->--}}

    {{--<div class="form-group">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Seo keyword')}}</label>--}}
    {{--<input type="text" class="form-control" placeholder="{{__('Seo keyword')}}" id="exampleInputFile" name="seo_keyword" value="{{$setting->seo_keyword}}">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!--form control-->--}}
    {{--<div class="form-group">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Seo Description')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="seo_description" value="{{$setting->seo_description}}">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane" id="tab2">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Company Contact')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="company_contact" value="{{$setting->company_contact}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Company Address')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="company_address" value="{{$setting->company_address}}">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane" id="tab3">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('From Name')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="from_name" value="{{$setting->from_name}}">--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('From Email')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="from_email" value="{{$setting->from_email}}">--}}
    {{--</div>--}}
    {{--<!--form control-->--}}
    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane" id="tab4">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Copyright Text')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="copyright_text" value="{{$setting->copyright_text}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Footer Text')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="footer_text" value="{{$setting->footer_text}}">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane" id="tab5">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Facebook')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="facebook" value="{{$setting->facebook}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Linkedin')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="linkedin", value="{{$setting->linkedin}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Twitter')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="twitter" value="{{$setting->twitter}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Google')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="google" value="{{$setting->google}}">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div role="tabpanel" class="tab-pane" id="tab6">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Terms')}}</label>--}}
    {{--<input type="text" class="form-control" id="exampleInputFile" name="terms" value="{{$setting->terms}}">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Disclaimer')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="disclaimer" value="{{$setting->disclaimer}}">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div role="tabpanel" class="tab-pane" id="tab7">--}}
    {{--<div class="form-group">--}}
    {{--<label for="exampleInputFile">{{__('Google Analytics')}}</label>--}}
    {{--<input type="text" class="form-control"  id="exampleInputFile" name="google_analytics" value="{{$setting->google_analytics}}">--}}
    {{--</div>--}}
    {{--<!--form control-->--}}
    {{--</div>--}}
    {{--<!-- /.box-body -->--}}
    {{--<div class="box-footer">--}}
    {{--<button type="submit" class="btn btn-primary">{{__('Submit')}}</button>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
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