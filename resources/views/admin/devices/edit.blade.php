@extends('layouts.app')

@section('title',__('Devices'))

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Edit New Devices')}}
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
                            <h3 class="box-title">{{__('Devices')}}</h3>
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
                                    <input type="text" class="form-control" id="exampleInputFile" name="description" value="{{$devices->description}}">
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
                            kamaDatepicker('test-date-id', { buttonsColor: "blue",
                                forceFarsiDigits: true,
                                nextButtonIcon: "fa fa-arrow-circle-right",
                                previousButtonIcon: "fa fa-arrow-circle-left"});
                        </script>

@endpush