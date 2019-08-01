@extends('layouts.app')

@section('title',__('Devices'))

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css.pro/froala_editor.pkgd.min.css')}}" rel="stylesheet"/>
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
                    {{__('Edit Device')}}
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
                                                <h3 class="box-title">{{__('Device')}}</h3>
                                            </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('devices.update',$devices->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Type')}}</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Device Type" name="type" value="{{$devices->type}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Model')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" name="model" value="{{$devices->model}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Serial')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" name="serial" value="{{$devices->serial}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Install Date')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" name="install_date" value="{{$devices->install_date}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Install Location')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" name="install_loc" value="{{$devices->install_loc}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Update')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" name="update" value="{{$devices->update}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Status')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Description')}}</label>
                                    <textarea type="text" class="form-control"  id="froala" name="description" >{{$devices->description}}
                                    </textarea>
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
                                            <script src="{{asset('backend/js.pro/froala_editor.pkgd.min.js')}}"></script>
                                            <script>
                                                kamaDatepicker('test-date-id', {
                                                    buttonsColor: "blue",
                                                    forceFarsiDigits: true,
                                                    nextButtonIcon: "fa fa-arrow-circle-right",
                                                    previousButtonIcon: "fa fa-arrow-circle-left"
                                                });
                                                var editor = new FroalaEditor('#froala');
                                            </script>

@endpush