@extends('layouts.app')

@section('title',__('Slider'))

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Edit Slider')}}
                <small>Preview</small>
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
                            <h3 class="box-title">{{__('Slider')}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Slider Title')}}</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Title')}}" name="title" value="{{$slider->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Sub Title')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Sub Title')}}" id="exampleInputFile" name="sub_title" value="{{$slider->sub_title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Image')}}</label>
                                    <input type="file" name="image">
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

@push('scripts')

@endpush