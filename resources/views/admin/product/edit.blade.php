@extends('layouts.app')

@section('title','Product')

@push('css')
    <link href="{{asset('backend/css.pro/froala_editor.pkgd.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet"/>
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
                    {{__('Edit Product')}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="{{route('product.index')}}">{{__('Product')}}</a></li>
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
                                    <div class="col-md-10">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('Product')}}</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <form id="form1"
                                                  ENCTYPE="multipart/form-data">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">{{__('Product Name')}}</label>
                                                                <input type="text" class="form-control"
                                                                       id="hp_product_name"
                                                                       data-id="{{$product->id}}"
                                                                       name="hp_product_name"
                                                                       value="{{$product->hp_product_name}}">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Product Model')}}</label>
                                                                <input type="text" class="form-control"
                                                                       id="hp_product_model"
                                                                       name="hp_product_model"
                                                                       value="{{$product->hp_product_model}}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('product Publish Date')}}</label>
                                                                <input type="text" class="form-control"
                                                                       id="test-date-id"
                                                                       name="hp_product_publish_date"
                                                                       value="{{$product->hp_product_publish_date}}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{__('product Description')}}</label>
                                                        <textarea type="text" class="form-control" id="froala"
                                                                  name="hp_product_description"
                                                        >{{$product->hp_product_description}}</textarea>
                                                    </div>
                                                    <div class="checkbox checkbox-info">
                                                        <input type="checkbox" id="inputSchedule" name="status"
                                                               @if($product->hp_product_status) checked @endif>
                                                        <label for="inputSchedule" class="">
                                                            <span>{{__('Status')}}</span> </label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="hp_product_image" id="hp_product_image">
                                                <!-- /.box-body -->
                                            </form>
                                        </div>

                                        <form action="{{url('/admin/image-product-save')}}" class="dropzone"
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
                                        <br>
                                        <div class="box-footer">
                                            <button id="sub_form1" type="submit"
                                                    class="btn btn-primary">{{__('Submit')}}</button>
                                        </div>

                                        @endsection

                                        @push('scripts')
                                            <script src="{{asset('backend/js.pro/jquery.blockUI.js')}}"
                                                    type="text/javascript"></script>
                                            <script src="{{asset('backend/src/kamadatepicker.min.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/froala_editor.pkgd.min.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/dropzone.js')}}"></script>
                                            <script>
                                                kamaDatepicker('test-date-id', {
                                                    buttonsColor: "blue",
                                                    forceFarsiDigits: true,
                                                    nextButtonIcon: "fa fa-arrow-circle-right",
                                                    previousButtonIcon: "fa fa-arrow-circle-left"
                                                });
                                                var editor = new FroalaEditor('#froala');

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
                                                            $('#hp_product_image').val(file.upload.filename);
                                                        },
                                                        error: function (file, response) {
                                                            return false;
                                                        }
                                                    };
                                            </script>
                                            <script>
                                                $(document).ready(function () {
                                                    $("#sub_form1").on('click', function (event) {
                                                        var data =
                                                            {
                                                                id: $('#hp_product_name').data('id'),
                                                                hp_product_name: $('#hp_product_name').val(),
                                                                hp_product_model: $('#hp_product_model').val(),
                                                                hp_product_publish_date: $('#test-date-id').val(),
                                                                hp_product_description: $('#froala').val(),
                                                                hp_product_status: $('#hp_product_status').val(),
                                                                hp_product_image: $('#hp_product_image').val(),

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
                                                            url: '/admin/product/' + data.id,
                                                            type: 'POST',
                                                            data: data,
                                                            dataType: 'json',
                                                            method: 'put',
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