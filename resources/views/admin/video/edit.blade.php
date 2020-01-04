@extends('layouts.app')

@section('title',__('Video'))

@push('css')
    <link href="{{asset('backend/css.pro/cropper.min.css')}}" rel="stylesheet" type="text/css">
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
                        {{--<div class="d-flex m-r-20 m-l-10 hidden-md-down">--}}
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
                        {{--</div>--}}
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
            </div>
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    {{__('Edit Video')}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li>{{__('Video')}}</li>
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
                                    <div class="col-md-12">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('Video')}}</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <form id="form1"
                                                  enctype="multipart/form-data">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputPassword1">{{__('Video Title')}}</label>
                                                            <input type="text" class="form-control"
                                                                   name="hv_title"
                                                                   id="hv_title" data-id="{{$video->id}}"
                                                                   value="{{$video->hv_title}}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputPassword1">{{__('Category')}}</label>
                                                           <input class="form-control" name="hv_category" id="hv_category" value="{{$video->hv_category}}" >
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputFile">{{__('Video File')}}</label>
                                                            <input type="file" class="form-control"
                                                                   id="hv_video"
                                                                   name="hv_video">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox checkbox-info">
                                                        <input type="checkbox" id="inputSchedule" name="hv_status"
                                                               @if($video->hv_status) checked @endif>
                                                        <label for="inputSchedule" class="">
                                                            <span>{{__('Show in Video')}}</span> </label>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </form>
                                        </div>
                                        <br>
                                        <div class="box-footer">
                                            <button id="sub_form1" type="submit"
                                                    class="btn btn-primary">{{__('Submit')}}</button>
                                        </div>

                                        @endsection

                                        @push('scripts')
                                            <script src="{{asset('backend/js.pro/jquery.blockUI.js')}}"
                                                    type="text/javascript"></script>
                                            <script>
                                                $(document).ready(function () {
                                                    $("#sub_form1").on('click', function (event) {
                                                        var data = {
                                                            id: $('#hv_title').data('id'),
                                                            title: $('#hv_title').val(),
                                                            category: $('#hv_category').val(),
                                                            video: $('#hv_video').val(),
                                                            status: $('#inputSchedule')[0].checked == true ? 1 : 0,
                                                        }
                                                        event.preventDefault();
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
                                                            url: '/admin/video/'+ data.id,
                                                            type: 'POST',
                                                            data: data,
                                                            dataType: 'json',
                                                            method:'put',
                                                            async: false,
                                                            success: function (data) {
                                                                setTimeout($.unblockUI, 2000);
                                                                location.redirect.back();
                                                            },
                                                            cache: false,
                                                        });
                                                    });
                                                });
                                            </script>


                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endpush