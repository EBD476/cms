@extends('layouts.app')

@section('title',__('product'))

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
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Table Data table</li>
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>THIS MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>LAST MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
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
                            <a href="{{route('product.create')}}" class="btn btn-primary">{{__('Add New Product')}}</a>
                            <h4 class="card-title">Data Table</h4>
                            <h6 class="card-subtitle">Data table example</h6>
                            <div class="table-responsive m-t-40">
                                <div id="myTable_wrapper"
                                     class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="myTable_length"><label>Show <select
                                                            name="myTable_length" aria-controls="myTable"
                                                            class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="myTable_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="myTable"></label></div>
                                        </div>
                                    </div>
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
                                                        style="width: 146px;">Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 242px;">Position
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 106px;">Office
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1" aria-label="Age: activate to sort column ascending"
                                                        style="width: 38px;">Age
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 92px;">Start date
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 69px;">Salary
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <th>
                                                    {{__('ID')}}
                                                </th>
                                                <th>
                                                    {{__('Product Name')}}
                                                </th>
                                                <th>
                                                    {{__('Product Model')}}
                                                </th>
                                                <th>
                                                    {{__('Product Image')}}
                                                </th>
                                                <th>
                                                    {{__('Product Publish Date')}}
                                                </th>
                                                <th>
                                                    {{__('Product status')}}
                                                </th>
                                                <th>
                                                    {{__('Create At')}}
                                                </th>
                                                <th>
                                                    {{__('Action')}}
                                                </th>
                                                </thead>
                                                <tbody>

                                                @foreach($product as $key => $product)
                                                    <tr>
                                                        <td>
                                                            {{$key + 1}}
                                                        </td>
                                                        <td>
                                                            {{$product ->hp_product_name}}
                                                        </td>
                                                        <td>
                                                            {{$product ->hp_product_model}}
                                                        </td>
                                                        <td>
                                                            {{$product ->hp_product_image}}
                                                        </td>
                                                        <td>
                                                            {{$product ->hp_product_publish_date}}
                                                        </td>
                                                        <td>
                                                            {{$product ->hp_product_status}}
                                                        </td>
                                                        <td>
                                                            {{$product -> created_at}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('product.edit',$product->id)}}"
                                                               data-toggle="tooltip" data-original-title="Edit">edit <i
                                                                        class="fa fa-times text-inverse m-r-10"></i>
                                                            </a>
                                                            <form id="-form-delete{{$product->id}}"
                                                                  style="display: none;" method="POST"
                                                                  action="{{route('product.destroy',$product->id)}}">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                                            event.preventDefault();
                                                                            document.getElementById('-form-delete{{$product->id}}').submit();
                                                                            }else {
                                                                            event.preventDefault();
                                                                            }"><i class="fa fa-fw fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="myTable_info" role="status"
                                                 aria-live="polite">Showing 1 to 10 of 57 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="myTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="myTable_previous"><a href="#" aria-controls="myTable"
                                                                                 data-dt-idx="0" tabindex="0"
                                                                                 class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                                                                    aria-controls="myTable"
                                                                                                    data-dt-idx="1"
                                                                                                    tabindex="0"
                                                                                                    class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="myTable"
                                                                                              data-dt-idx="2"
                                                                                              tabindex="0"
                                                                                              class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="myTable"
                                                                                              data-dt-idx="3"
                                                                                              tabindex="0"
                                                                                              class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="myTable"
                                                                                              data-dt-idx="4"
                                                                                              tabindex="0"
                                                                                              class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="myTable"
                                                                                              data-dt-idx="5"
                                                                                              tabindex="0"
                                                                                              class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                                                              aria-controls="myTable"
                                                                                              data-dt-idx="6"
                                                                                              tabindex="0"
                                                                                              class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="myTable_next"><a
                                                                href="#" aria-controls="myTable" data-dt-idx="7"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to
                                17 of 17 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example_previous"><a
                                                href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="example_next"><a href="#"
                                                                                                             aria-controls="example"
                                                                                                             data-dt-idx="2"
                                                                                                             tabindex="0"
                                                                                                             class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            <div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
                <div class="rpanel-title"> Service Panel
                    <span>
                                            <i class="ti-close right-side-toggle"></i>
                                        </span>
                </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li>
                            <b>With Light sidebar</b>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                        </li>
                        <li class="d-block m-t-30">
                            <b>With Dark sidebar</b>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li>
                            <b>Chat option</b>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle">
                                <span>Varun Dhavan
                                                        <small class="text-success">online</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle">
                                <span>Genelia Deshmukh
                                                        <small class="text-warning">Away</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle">
                                <span>Ritesh Deshmukh
                                                        <small class="text-danger">Busy</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle">
                                <span>Arijit Sinh
                                                        <small class="text-muted">Offline</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle">
                                <span>Govinda Star
                                                        <small class="text-success">online</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle">
                                <span>John Abraham
                                                        <small class="text-success">online</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle">
                                <span>Hritik Roshan
                                                        <small class="text-success">online</small>
                                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle">
                                <span>Pwandeep rajan
                                                        <small class="text-success">online</small>
                                                    </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slimScrollBar"
                 style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
            <div class="slimScrollRail"
                 style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2019 Material Pro Admin by wrappixel.com
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
@endpush