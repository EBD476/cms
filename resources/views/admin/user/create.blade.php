@extends('layouts.app')

@section('title',__('Users'))

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
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
                    {{__('Insert User')}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="{{route('user.index')}}">{{__('User')}}</a></li>
                </ol>
            </section>

            <!-- /.content-wrapper -->
            <!-- Main content -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{--<h4 class="card-title">Basic Material inputs</h4>--}}
                            {{--<h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.--}}
                            {{--</h6>--}}
                            <section class="content">
                                <!-- left column -->
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">{{__('User')}}</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form id="form1"
                                          enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">{{__('Name')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputPassword1" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">{{__('User Name')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputPassword1" name="username">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('Email')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputFile" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">{{__('Password')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputPassword1" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">{{__('Confirmed Password')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputPassword1"
                                                               name="confirmed">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('Email Verified At')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputFile"
                                                               name="email_verified_at">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('Phone')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputFile" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('Remember Token')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputFile" name="remember_token">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('Address')}}</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputFile" name="address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input type="checkbox" id="inputSchedule"
                                                       name="inputCheckboxesSchedule">
                                                <label for="inputSchedule" class="">
                                                    <span>{{__('Active')}}</span> </label>
                                            </div>
                                            <input type="hidden" name="hn_image" id="hn_image">

                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit"
                                                    class="btn btn-primary">{{__('Submit')}}</button>
                                        </div>
                                    </form>
                                    <form action="{{url('/admin/image-user-save')}}" class="dropzone"
                                          id="dropzone"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="fallback">
                                            <div class="form-group">
                                                <label for="exampleInputFile">{{__('Image')}}</label>
                                                <input type="file" class="form-control"
                                                       name="file">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>

                        @endsection

                        @push('scripts')
                            <script src="{{asset('backend/js.pro/dropzone.js')}}"></script>
                            <script>
                                Dropzone.options.dropzone =
                                    {
                                        maxFilesize: 12,
                                        // فایل نوع آبجکت است
                                        renameFile: function (file) {
                                            var dt = new Date();
                                            var time = dt.getTime();
                                            return time + '-' + file.name;
                                        },
                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                        addRemoveLinks: true,
                                        timeout: 5000,
                                        success: function (file, response) {
                                            // اسم اینپوت و مقداری که باید به آن ارسال شود
                                            $('#hn_image').val(file.upload.filename);
                                        },
                                        error: function (file, response) {
                                            return false;
                                        }
                                    };
                            </script>
                            <script src="{{asset('backend/js.pro/blockUI.js')}}" type="text/javascript"></script>
                            <script>
                                $(document).ready(function () {
                                    $("#form1").submit(function (event) {
                                        var data = $("#form1").serialize();
                                        event.preventDefault();
                                        $.blockUI();

                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $.blockUI({
                                            message: '{{__('please wait...')}}', css: {
                                                border: 'none',
                                                padding: '15px',
                                                backgroundColor: '#000',
                                                '-webkit-border-radius': '10px',
                                                '-moz-border-radius': '10px',
                                                opacity: .5,
                                                color: '#fff'
                                            }
                                        });
                                        $.ajax({
                                            url: '/admin/user',
                                            type: 'POST',
                                            data: data,
                                            dataType: 'json',
                                            async: false,
                                            success: function (data) {
                                                setTimeout($.unblockUI, 2000);
                                                location.reload();
                                            },
                                            cache: false,
                                        });
                                    });
                                });
                            </script>
    @endpush