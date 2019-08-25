@extends('layouts.app')

@section('title',__('Gallery'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('gallery.create')}}" class="btn btn-primary">{{__('Add New Image')}}</a>
                            <h4 class="card-title"></h4>
                            <h6 class="card-subtitle"></h6>
                            <div class="table-responsive m-t-40">
                                <div id="myTable_wrapper"
                                     class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="myTable"
                                                   class="table table-bordered table-striped dataTable no-footer"
                                                   role="grid" aria-describedby="myTable_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 146px;"> {{__('ID')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 242px;"> {{__('Name')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 106px;">{{__('Code')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 92px;">  {{__('action')}}
                                                    </th>
                                                </tr>
                                                </thead>
                                    <tbody>

                                    @foreach($gallery as $key => $gallery)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$gallery ->hg_name}}
                                            </td>
                                            <td>
                                                {{$gallery ->hg_code}}
                                            </td>
                                            <td>
                                               <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-info btn-sm"><i class="ti-pencil"></i></a>
                                                <form id ="-form-delete{{$gallery->id}}" style="display: none;" method="POST" action="{{route('gallery.destroy',$gallery->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('Are You Sure Delete This?')){
                                                    event.preventDefault();
                                                    document.getElementById('-form-delete{{$gallery->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="ti-close"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
        @endsection

        @push('scripts')
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#table').DataTable();
                } );
            </script>
    @endpush