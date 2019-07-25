@extends('layouts.app')

@section('title','Product')

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet"/>
@endpush

@section('content')
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
                        {{__('Edit Project')}}
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
                            <h4 class="card-title">Basic Material inputs</h4>
                            <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.</h6>

                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">{{__('Project')}}</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form method="post" action="{{route('product.update',$product->id)}}"
                                      ENCTYPE="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">{{__('Product Name')}}</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                   name="hp_product_name" value="{{$product->hp_product_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Product Model')}}</label>
                                            <input type="text" class="form-control"
                                                   placeholder="{{__('Product Model')}}" id="exampleInputFile"
                                                   name="hp_product_model" value="{{$product->hp_product_model}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product Description')}}</label>
                                            <input type="text" class="form-control"
                                                   placeholder="{{__('product Description')}}" id="exampleInputFile"
                                                   name="hp_product_description"
                                                   value="{{$product->hp_product_description}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product Price')}}</label>
                                            <input type="text" class="form-control"
                                                   placeholder="{{__('product Price')}}" id="exampleInputFile"
                                                   name="hp_product_price" VALUE="{{$product->hp_product_price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product Publish Date')}}</label>
                                            <input type="text" class="form-control" id="test-date-id"
                                                   placeholder="{{__('product Publish Date')}}" id="exampleInputFile"
                                                   name="hp_product_publish_date"
                                                   value="{{$product->hp_product_publish_date}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product status')}}</label>
                                            <input type="text" class="form-control"
                                                   placeholder="{{__('product status')}}" id="exampleInputFile"
                                                   name="hp_product_status" value="{{$product->hp_product_status}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product Image')}}</label>
                                            <input type="file" id="exampleInputFile" name="hp_product_image">
                                        </div>
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
                            </div>

                            @endsection

                            @push('scripts')
                                <script src="{{asset('backend/src/kamadatepicker.min.js')}}"></script>
                                <script>
                                    kamaDatepicker('test-date-id', {
                                        buttonsColor: "blue",
                                        forceFarsiDigits: true,
                                        nextButtonIcon: "fa fa-arrow-circle-right",
                                        previousButtonIcon: "fa fa-arrow-circle-left"
                                    });
                                </script>
    @endpush