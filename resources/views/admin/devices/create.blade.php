@extends('layouts.app')

@section('title',__('Devices'))

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Add New Devices')}}
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
                        <form role="form" method="post" action="{{route('devices.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Type')}}</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Type')}}" name="model">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Model')}}</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Model')}}" name="type">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Serial')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Serial')}}" name="serial">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Install Date')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Install Date')}}" name="install_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Install Location')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Install Location')}}"  name="install_loc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Update')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Update')}}" name="update">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Status')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Status')}}" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Description')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Description')}}" name="description">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> {{__('Check me out')}}
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