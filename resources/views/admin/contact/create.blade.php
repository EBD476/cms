@extends('layouts.app')

@section('title',__('Contact Us'))

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
                    {{--<div class="d-flex m-t-10 justify-content-end">--}}
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
                        {{--<div class="d-flex m-r-20 m-l-10 hidden-md-down">--}}
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
                        {{--</div>--}}
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
                    {{__('Insert Message')}}
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
                                    <div class="col-md-12">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <form role="form" method="post" action="{{route('contact_us.store')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{__('Contact Us')}}</h4>
                                                            {{--<h6 class="card-subtitle">made with bootstrap elements</h6>--}}
                                                            <form class="form p-t-20">
                                                                <div class="form-group">
                                                                    <label for="exampleInputuname">{{__('Name')}}</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                                                        </div>
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputuname"
                                                                               name="hc_name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">{{__('Email')}}</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-email"></i>
                                                </span>
                                                                        </div>
                                                                        <input type="email" class="form-control"
                                                                               id="exampleInputEmail1"
                                                                               name="hc_email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pwd1">{{__('IP')}}</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-lock"></i>
                                                </span>
                                                                        </div>
                                                                        <input class="form-control" id="pwd1"
                                                                               name="hc_ip">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pwd2">{{__('Message')}}</label>
                                                                    <div class="input-group"><span
                                                                                class="input-group-text" id="basic-addon1">
                                                                <i class="ti-pencil"></i>
                                                                   </span>
                                                                 <textarea type="text" class="form-control"
                                                                           name="hc_message">
                                                                  </textarea>
                                                                    </div>
                                                                </div>
                                                                <button type="submit"
                                                                        class="btn btn-success waves-effect waves-light m-r-10">{{__('Submit')}}</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



@endsection

@push('scripts')

@endpush