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
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Table Data table</li>
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>THIS MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>LAST MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                                <i class="ti-settings text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    {{__('Insert User')}}
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
                        <div class="card-body">
                            {{--<h4 class="card-title">Basic Material inputs</h4>--}}
                            {{--<h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.--}}
                            {{--</h6>--}}

                            <section class="content">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-6">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('User')}}</h3>
                                            </div>
                                            <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('Name')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Name')}}" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('User Name')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('User Name')}}" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Email')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Email')}}" id="exampleInputFile" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Email Verified At')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Email Verified At')}}" id="exampleInputFile" name="email_verified_at">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('Password')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Password')}}" name="password">
                                                </div>
                                                {{--<div class="form-group">--}}
                                                {{--<label for="exampleInputPassword1">{{__('Confirmed Password')}}</label>--}}
                                                {{--<input type="text" class="form-control" id="exampleInputPassword1" PLACEHOLDER="{{__('Confirmed Password')}}" name="confirmed">--}}
                                                {{--</div>--}}
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Phone')}}</label>
                                                    <input type="text"  class="form-control" placeholder="{{__('Phone')}}" id="exampleInputFile" name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Address')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Address')}}" id="exampleInputFile" name="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Remember Token')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Remember Token')}}" id="exampleInputFile" name="remember_token">
                                                </div>
                                                <input type="hidden" name="hn_image" id="hn_image">

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">{{__('Check me out')}}
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                            </div>
                                        </form>
                                            <form action="{{url('/admin/image-save')}}" class="dropzone" id="dropzone"
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
@endpush