@extends('layouts.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
    <div class="page-wrapper" style="min-height: 177px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-7 col-4 align-self-center">
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-light">{{__('New News')}}</h3>
                                    <h5 class="text-muted m-b-0">{{$news}}</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-warning"><i
                                            class="mdi mdi-cellphone-link"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-lgiht">{{__('Dealership')}}</h3>
                                    <h5 class="text-muted m-b-0">{{$dealership}}</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-primary"><i
                                            class="mdi mdi-cart-outline"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-lgiht">{{__('Article')}}</h3>
                                    <h5 class="text-muted m-b-0">{{$article}}</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-danger"><i
                                            class="mdi mdi-bullseye"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-lgiht">{{__('Project')}}</h3>
                                    <h5 class="text-muted m-b-0">{{$project_count}}</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{__('Our Visitors')}}</h3>
                            <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                            <div id="visitor" style="height:290px; width:100%;"></div>
                        </div>
                        <div class="card-block text-center ">
                            {{--<ul class="list-inline m-b-0">--}}
                                {{--<li>--}}
                                    {{--<h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile--}}
                                    {{--</h6></li>--}}
                                {{--<li>--}}
                                    {{--<h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop--}}
                                    {{--</h6></li>--}}
                                {{--<li>--}}
                                    {{--<h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet--}}
                                    {{--</h6></li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
                <!-- ip client -->
                <input type="hidden" id="ip" value="1">
            </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @endsection

        @push('scripts')
            <script>
                // ==============================================================
                // Our visitor
                // ==============================================================
                var chart = c3.generate({
                    bindto: '#visitor',
                    data: {
                        columns: [
                            ['visit_count', $('#ip').val()],
                            ['android', 40],
                        ],

                        type: 'donut',
                        onclick: function (d, i) {
                            console.log("onclick", d, i);
                        },
                        onmouseover: function (d, i) {
                            console.log("onmouseover", d, i);
                        },
                        onmouseout: function (d, i) {
                            console.log("onmouseout", d, i);
                        }
                    },
                    donut: {
                        label: {
                            show: false
                        },
                        title: "Our visitor",
                        width: 20,

                    },

                    legend: {
                        hide: true
                        //or hide: 'data1'
                        //or hide: ['data1', 'data2']
                    },
                    color: {
                        pattern: ['#eceff1', '#745af2', '#26c6da', '#1e88e5']
                    }
                });
            </script>
    @endpush