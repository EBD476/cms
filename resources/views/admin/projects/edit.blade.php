@extends('layouts.app')

@section('title',__('Project'))

@push('css')
    <link href="{{asset('backend/css.pro/froala_editor.pkgd.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/css.pro/leaflet.css') }}" rel="stylesheet">
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
                    {{__('Edit Project')}}
                    <small>{{__('Preview')}}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}} > </a></li>
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
                                                <h3 class="box-title">{{__('Project')}}</h3>
                                            </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form id="form1" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">{{__('Project Name')}}</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"  name="hp_project_name" value="{{$projects->hp_project_name}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Project Owner')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hp_project_owner" value="{{$projects->hp_project_owner}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Project Type')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hp_project_type" value="{{$projects->hp_project_type}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Project Units')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hp_project_units" value="{{$projects->hp_project_units}}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Project Address')}}</label>
                                            <input type="text" class="form-control" id="exampleInputFile" name="hp_project_address" value="{{$projects->hp_project_address}}">
                                        </div>
                                    </div>
                                    {{--<div class="col-3">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="exampleInputFile">{{__('Project Options')}}</label>--}}
                                            {{--<input type="text" class="form-control" id="exampleInputFile" name="hp_project_options" value="{{$projects->hp_project_options}}">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Project Complete Date')}}</label>
                                            <input type="text" class="form-control" id="test-date-id" name="hp_project_complete_date" value="{{$projects->hp_project_complete_date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Location')}}</label>
                                    <div id="map"
                                         style="width: 100%; height: 300px;direction: ltr;z-index:0"></div>
                                    <input name="hp_project_address" type="hidden"
                                           id="location">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Description')}}</label>
                                    <textarea type="text" class="form-control" id="froala" name="hp_project_description" >{{$projects->hp_project_description}}</textarea>
                                </div>
                                <input type="hidden" name="hn_image" id="hn_image">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputSchedule" name="status" @if($projects->hp_status) checked @endif>
                                    <label for="inputSchedule" class=""> <span>{{__('Status')}}</span> </label>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                                        </div>
                                            <form action="{{url('/admin/image-project-save')}}" class="dropzone" id="dropzone"
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
                                            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                        </div>

@endsection

@push('scripts')
                                            <script src="{{asset('backend/src/kamadatepicker.min.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/froala_editor.pkgd.min.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/dropzone.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/leaflet.js')}}"></script>
                                            <script src="{{asset('backend/js.pro/jquery.blockUI.js')}}" type="text/javascript"></script>
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
                                                            $('#hn_image').val(file.upload.filename);
                                                        },
                                                        error: function (file, response) {
                                                            return false;
                                                        }
                                                    };
                                            </script>
                                            <script>
                                                $(document).ready(function () {
                                                    $("#form1").submit(function (event) {
                                                        var data = $("#form1").serialize();
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
                                                            url: '/admin/project/'+data.id,
                                                            type: 'POST',
                                                            data: data,
                                                            dataType: 'json',
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
                                            <script type="text/javascript">

                                                var loc;
                                                var greenIcon = L.icon({
                                                    iconUrl: '../../backend/img/marker-icon-x48.png',
                                                    shadowUrl: 'leaf-shadow.png',

                                                    iconSize: [48, 48], // size of the icon
                                                    shadowSize: [50, 64], // size of the shadow
                                                    iconAnchor: [25, 44], // point of the icon which will correspond to marker's location
                                                    shadowAnchor: [4, 62],  // the same for the shadow
                                                    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
                                                });

                                                var map = L.map('map').setView([35.7736, 51.4631], 15);

                                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                                                function onMapClick(e) {

                                                    var jsonLoc = JSON.parse(JSON.stringify(e.latlng));
                                                    $("#location").val(jsonLoc.lat + ',' + jsonLoc.lng);

                                                    if (loc != undefined) {
                                                        loc.remove();
                                                    }
                                                    loc = L.marker([jsonLoc.lat, jsonLoc.lng], {icon: greenIcon}).addTo(map);
                                                }

                                                $("#remove").click(function () {
                                                    loc.remove();
                                                });

                                                map.on('click', onMapClick);

                                            </script>
@endpush