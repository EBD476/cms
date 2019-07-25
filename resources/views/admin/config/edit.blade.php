@extends('layouts.app')

@section('title',__('Device Config'))

@push('css')
    <>
@endpush

@section('content')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        {{__('Edit Device Config')}}
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
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">{{__('Device Config')}}</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="{{route('config.update',$config->id)}}" ENCTYPE="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">{{__('Device ID')}}</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Device ID" name="hdc_device_id" value="{{$config->hdc_device_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Device Serial')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hdc_device_serial" value="{{$config->hdc_device_serial}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Control Config')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hdc_control_config" value="{{$config->hdc_control_config}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('product Description')}}</label>
                                            <textarea type="text" class="form-control" id="exampleInputFile" name="hp_product_description" value="{{$config->hp_product_description}}"></textarea>
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

@endpush