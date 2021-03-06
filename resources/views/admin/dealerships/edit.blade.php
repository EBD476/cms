@extends('layouts.app')

@section('title',__('Dealership'))

@push('css')
    <link href="{{ asset('backend/css.pro/leaflet.css') }}" rel="stylesheet">
@endpush

@section('content')
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
            </div>
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    {{__('Edit Dealership')}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Dealership')}}</a></li>
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
                                            <div class="content-wrapper">
                                                <!-- Content Header (Page header) -->
                                                <!-- /.content-wrapper -->
                                                <!-- Main content -->
                                                <section class="content">
                                                    <div class="row">
                                                        <!-- left column -->
                                                        <div class="col-md-12">
                                                            <!-- general form elements -->
                                                            <div class="box box-primary">
                                                                <div class="box-header with-border">
                                                                    <h3 class="box-title">{{__('Dealership')}}</h3>
                                                                </div>
                                                                <!-- /.box-header -->
                                                                <!-- form start -->
                                                                <form id="form1"
                                                                      enctype="multipart/form-data">
                                                                    <div class="box-body">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership Agent')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_agent"
                                                                                           data-id="{{$dealerships->id}}"
                                                                                           name="hds_dealership_agent"
                                                                                           value="{{$dealerships->hds_dealership_agent}}">
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership Phone 1')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_phone_1"
                                                                                           name="hds_dealership_phone_1"
                                                                                           value="{{$dealerships->hds_dealership_phone_1}}">

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership Phone 2')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_phone_2"
                                                                                           name="hds_dealership_phone_2"
                                                                                           value="{{$dealerships->hds_dealership_phone_2}}">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership Phone 3')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_phone_3"
                                                                                           name="hds_dealership_phone_3"
                                                                                           value="{{$dealerships->hds_dealership_phone_3}}">

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership City')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_city"
                                                                                           name="hds_dealership_city"
                                                                                           value="{{$dealerships->hds_dealership_city}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">{{__('Dealership State')}}</label>
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           id="hds_dealership_state"
                                                                                           name="hds_dealership_state"
                                                                                           value="{{$dealerships->hds_dealership_state}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputFile">{{__('Dealership Address')}}</label>
                                                                                <textarea type="text"
                                                                                          class="form-control"
                                                                                          id="hds_dealership_address"
                                                                                          name="hds_dealership_address"> {{$dealerships->hds_dealership_address}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputFile">{{__('Dealership Location')}}</label>
                                                                                <div id="map"
                                                                                     style="width: 100%; height: 300px;direction: ltr;z-index:0"></div>
                                                                                <input type="hidden"
                                                                                       class="form-control"
                                                                                       id="location"
                                                                                       name="hds_dealership_state"
                                                                                       value="{{$dealerships->hds_dealership_loc}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="checkbox checkbox-info">
                                                                            <input type="checkbox" id="inputSchedule"
                                                                                   name="status"
                                                                                   @if($dealerships->hds_status) checked @endif>
                                                                            <label for="inputSchedule" class="">
                                                                                <span>{{__('Status')}}</span> </label>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.box-body -->

                                                                    <div class="box-footer">
                                                                        <button type="submit"
                                                                                class="btn btn-primary">{{__('Submit')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            @endsection

                                                            @push('scripts')
                                                                <script src="{{asset('backend/js.pro/leaflet.js')}}"></script>
                                                                <script src="{{asset('backend/js.pro/jquery.blockUI.js')}}"
                                                                        type="text/javascript"></script>
                                                                <script type="text/javascript">

                                                                    var loc;
                                                                    var map;
                                                                    var greenIcon;
                                                                    $(document).ready(function () {

                                                                        greenIcon = L.icon({
                                                                            iconUrl: '../../../backend/img/marker-icon-x48.png',
                                                                            shadowUrl: 'leaf-shadow.png',

                                                                            iconSize: [48, 48], // size of the icon
                                                                            shadowSize: [50, 64], // size of the shadow
                                                                            iconAnchor: [25, 44], // point of the icon which will correspond to marker's location
                                                                            shadowAnchor: [4, 62],  // the same for the shadow
                                                                            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
                                                                        });

                                                                        map = L.map('map').setView([35.7736, 51.4631], 15);
                                                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                                                                        dealer_location = $("#location").val();
                                                                        dealer_location = dealer_location.split(',');
                                                                        loc = L.marker([dealer_location[0], dealer_location[1]], {icon: greenIcon}).addTo(map);

                                                                        map.on('click', onMapClick);
                                                                    });


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

                                                                    $("#form1").submit(function (event) {
                                                                        var data = {
                                                                            hds_dealership_agent: $("#hds_dealership_agent").val(),
                                                                            hds_dealership_phone_1: $("#hds_dealership_phone_1").val(),
                                                                            hds_dealership_phone_2: $("#hds_dealership_phone_2").val(),
                                                                            hds_dealership_city: $("#hds_dealership_city").val(),
                                                                            hds_dealership_phone_3: $("#hds_dealership_phone_3").val(),
                                                                            hds_dealership_address: $("#hds_dealership_address").val(),
                                                                            hds_dealership_state: $("#hds_dealership_state").val(),
                                                                            hds_dealership_loc: $("#location").val(),
                                                                            status: $("#inputSchedule")[0].checked == true ? 1 : 0 ,
                                                                            id: $("#hds_dealership_agent").data('id'),
                                                                        }
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
                                                                            url: '/admin/dealership/' + data.id,
                                                                            type: 'POST',
                                                                            data: data,
                                                                            dataType: 'json',
                                                                            async: false,
                                                                            method: 'put',
                                                                            success: function (data) {
                                                                                setTimeout($.unblockUI, 2000);
                                                                                location.reload();
                                                                            },
                                                                            cache: false,
                                                                        });
                                                                    });
                                                                </script>

    @endpush