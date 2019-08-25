@extends('layouts.app')

@section('title',__('Menu'))

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
                    {{__('Insert Menu')}}
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
                                    <div class="col-md-10">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('Menu')}}</h3>
                                            </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Type')}}</label>
                                    <select  class="form-control"  name="type">
                                        @foreach($type as $type)
                                            <option>{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText"  name="name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Items')}}</label>
                                    <select  class="form-control"   name="items">
                                        @foreach($items as $items)
                                            <option>{{$items->title}}</option>
                                        @endforeach

                                    </select>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Label')}}</label>
                                        <select  class="form-control"  name="label">
                                            @foreach($label as $label)
                                                <option>{{$label->label}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Parent')}}</label>
                                        <select class="form-control" name="parent_name">
                                            @foreach($menus as $menu)
                                                @if($menu->label == 'parent')
                                                    <option>
                                                        {{$menu->name}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Create By')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText"  name="created_by" value="{{auth()->user()->name}}">
                                </div>
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                    <label for="inputSchedule" class=""> <span>{{__('Check me out')}}</span> </label>
                                </div>
                                <input type="hidden" name="image" id="image">
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                            </div>
                        </form>
                                            <form action="{{url('/admin//image-menu-save')}}" class="dropzone" id="dropzone"
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
                    </div>
@endsection

@push('scripts')
                                            <script src="{{asset('backend/js.pro/dropzone.js')}}"></script>
                                            <script>
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
                                                            $('#image').val(file.upload.filename);
                                                        },
                                                        error: function (file, response) {
                                                            return false;
                                                        }
                                                    };
                                            </script>
@endpush