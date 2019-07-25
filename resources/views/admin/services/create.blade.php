@extends('layouts.app')

@section('title',__('Dealership'))

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Add New Dealership')}}
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
                        <form role="form" method="post" action="{{route('dealership.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Dealership Code')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="Dealership Code" name="hds_dealership_code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Dealership City')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="{{__('Dealership City')}}" name="hds_dealership_city">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Dealership Agent')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="{{__('Dealership Agent')}}" name="hds_dealership_agent">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Dealership Phone')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="{{__('Dealership Phone')}}"  name="hds_dealership_phone">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Dealership State')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="{{__('Dealership State')}}"  name="hds_dealership_state">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Dealership Address')}}</label>
                                    <textarea type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Dealership Address')}}" name="hds_dealership_address"></textarea>
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