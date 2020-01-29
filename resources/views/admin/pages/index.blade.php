@extends('layouts.app')

@section('title',__('Pages'))

@push('css')
    <link href="{{asset('backend/css.pro/dataTables.bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/css.pro/switchery.min.css')}}" rel="stylesheet"/>
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
                    <h3 class="text-themecolor m-b-0 m-t-0">{{__('HANTA CMS System')}}</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}">{{__('Home')}}</a>
                        </li>
                        &nbsp;
                        <li>{{__('Pages')}}</li>
                    </ol>
                </div>
                {{--<div class="col-md-7 col-4 align-self-center">--}}
                {{--<div class="d-flex m-t-10 justify-content-end">--}}
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
                {{--<div class="">--}}
                {{--<button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">--}}
                {{--<i class="ti-settings text-white"></i>--}}
                {{--</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('pages.create')}}" class="btn btn-primary">{{__('Add New Pages')}}</a>
                            {{--<h4 class="card-title">Data Table</h4>--}}
                            {{--<h6 class="card-subtitle">Data table example</h6>--}}
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
                                                        style="width: 242px;"> {{__('Title')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 106px;"> {{__('Created By')}}
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 146px;">{{__('Status')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1" aria-label="Age: activate to sort column ascending"
                                                        style="width: 38px;">{{__('Action')}}
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($pages as $key => $pages)
                                                    <tr>
                                                        <td>
                                                            {{$key + 1}}
                                                        </td>
                                                        <td>
                                                            {{$pages ->title}}
                                                        </td>
                                                        <td>
                                                            {{$pages ->created_by}}
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" @if ($pages ->status) checked
                                                                   @endif class="js-switch"
                                                                   data-size="small" data-id="{{$pages->id}}">
                                                        </td>
                                                        <td>
                                                            <a href="{{route('pages.edit',$pages->id)}}"
                                                               class="btn btn-info btn-sm"><i class="ti-pencil"></i></a>
                                                            <button data-id="{{$pages->id}}" type="button"
                                                                    class="btn btn-danger btn-sm -form-delete"
                                                            ><i class="ti-close"></i>
                                                            </button>
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
                        <script src="{{asset('backend/js.pro/sweetalert.min.js')}}"></script>
                        <script src="{{asset('backend/js.pro/switchery.min.js')}}"></script>
                        <script>
                            $(document).ready(function () {
                                $('#table').DataTable({
                                    "language": {
                                        "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                                        "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                                        "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                                        "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                                        "sInfoPostFix": "",
                                        "sInfoThousands": ",",
                                        "sLengthMenu": "نمایش _MENU_ رکورد",
                                        "sLoadingRecords": "در حال بارگزاری...",
                                        "sProcessing": "در حال پردازش...",
                                        "sSearch": "جستجو:",
                                        "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                                        "oPaginate": {
                                            "sFirst": "ابتدا",
                                            "sLast": "انتها",
                                            "sNext": "بعدی",
                                            "sPrevious": "قبلی"
                                        },
                                        "oAria": {
                                            "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                                            "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                                        }
                                    }
                                });
                            });
                        </script>
                        <script>
                            $(document).ready(function () {
                                $('#table').DataTable();

                                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                                $('.js-switch').each(function () {
                                    new Switchery($(this)[0], $(this).data());

                                    $(this)[0].onchange = function () {
//ارسال بخشی از دیتا ی فرم . زمانی که به کل اطلاعات فرم نیازی نیست یا فرمی وجود ندارد
                                        var data = {
                                            id: $(this).data('id'),
                                            //اینپوت هایی که به کنترلر request داده می شود اینجا ساخته شده است.
                                            status: $(this)[0].checked == true ? 1 : 0
                                        };
                                        //token
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
//پاس کردن دیتا به کنترلر
                                        $.ajax({
                                            url: '/admin/pages-status',
                                            type: 'POST',
                                            data: data,
                                            dataType: 'json',
                                            async: false,
                                            success: function (data) {
                                                swal({
                                                    title: "",
                                                    text: "{{__('success')}}",
                                                    icon: "success",
                                                    button: "{{__('Done')}}"
                                                })
                                            },
                                            cache: false,
                                        });
                                        //alert($(this)[0].checked);
                                    }
                                });

                                $('.-form-delete').on('click', function (event) {

                                    var data = {
                                        id: $(this).data('id'),
                                    };
                                    //token
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    swal({
                                        // title: "",
                                        text: "{{__('Are you sure?')}}",
                                        Button: "{{__('Done')}}",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                    })
                                        .then((willDelete) => {
                                            if (willDelete) {
                                                $.ajax({
                                                    url: '/admin/pages-destroy/' + data.id,
                                                    type: 'delete',
                                                    data: data,
                                                    dataType: 'json',
                                                    async: false,
                                                    success: function (data) {
                                                    },
                                                    cache: false,
                                                });
                                                swal("{{__("Poof! Your imaginary file has been deleted!")}}", {
                                                    icon: "success",
                                                    Button: "{{__('Done')}}",
                                                    Button: "{{__('cancel')}}",
                                                });
                                                location.reload();
                                            } else {
                                                swal(
                                                    "{{__("Your imaginary file is safe!")}}",
                                                    {Button: "{{__('Done')}}"}
                                                );

                                            }
                                        });
                                });
                            });


                        </script>

                        //

                        <script>
                            $(document).ready(function () {

                                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                $('#table').on('click', 'button', function (event) {

                                    var data = table.row($(this).parents('tr')).data();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    swal({
                                        // title: "",
                                        text: "{{__('Are you sure?')}}",
                                        buttons: ["{{__('cancel')}}", "{{__('Done')}}"],
                                        icon: "warning",
                                        // buttons: true,
                                        dangerMode: true,
                                    })
                                        .then((willDelete) => {
                                            if (willDelete) {
                                                $.ajax({
                                                    url: '/admin/news-destroy/' + data[0],
                                                    type: 'delete',
                                                    data: data,
                                                    dataType: 'json',
                                                    async: false,
                                                    success: function (data) {
                                                        swal("{{__("Poof! Your imaginary file has been deleted!")}}", {
                                                            icon: "success",
                                                            button: "{{__('Done')}}",
                                                        });
                                                    },
                                                    cache: false,
                                                });
                                                location.reload();
                                            } else {
                                                swal(
                                                    "{{__("Your imaginary file is safe!")}}",
                                                    {button: "{{__('Done')}}"}
                                                );

                                            }
                                        });
                                });
                                var table = $('#table').on('draw.dt', function (e, settings, json, xhr) {

                                    $('.js-switch').each(function () {

                                        var data = table.row($(this).parents('tr')).data();
                                        var switchery = new Switchery($(this)[0], $(this).data());
                                        // alert(data[3]);
                                        data[3] == 1 ? $(this)[0].click() : 0;

                                        $(this)[0].onchange = function () {
                                            var cdata = table.row($(this).parents('tr')).data();
//ارسال بخشی از دیتا ی فرم . زمانی که به کل اطلاعات فرم نیازی نیست یا فرمی وجود ندارد
                                            var data = {
                                                id: cdata[0],
                                                //اینپوت هایی که به کنترلر request داده می شود اینجا ساخته شده است.
                                                status: $(this)[0].checked == true ? 1 : 0
                                            };
                                            //token
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            });
//پاس کردن دیتا به کنترلر
                                            $.ajax({
                                                url: '/admin/news_update_status',
                                                type: 'POST',
                                                data: data,
                                                dataType: 'json',
                                                async: false,
                                                success: function (data) {
                                                    swal({
                                                        title: "",
                                                        text: "{{__('success')}}",
                                                        icon: "success",
                                                        button: "{{__('Done')}}"
                                                    })
                                                },
                                                cache: false,
                                            });
                                        }
                                    })

                                }).DataTable({
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax": '/admin/json-data-pages',
                                    "columnDefs": [{
                                        "targets": -1,
                                        "data": null,
                                        "defaultContent": "<a href=\"\"\n" +
                                            "                                                   class=\"btn btn-info btn-sm\"><i class=\"ti-pencil\"></i></a>\n" +
                                            "                                                <button data-id=\"\" type=\"button\"\n" +
                                            "                                                        class=\"btn btn-danger btn-sm -form-delete\"\n" +
                                            "                                                ><i class=\"ti-close\"></i>\n" +
                                            "                                                </button>"
                                    }, {
                                        "targets": -2,
                                        "data": null,
                                        "defaultContent": '<input type="checkbox" class="js-switch" data-size="small"  >'
                                    }],
                                    "language": {
                                        "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
                                        "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                                        "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
                                        "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                                        "sInfoPostFix": "",
                                        "sInfoThousands": ",",
                                        "sLengthMenu": "نمایش _MENU_ رکورد",
                                        "sLoadingRecords": "در حال بارگزاری...",
                                        "sProcessing": "در حال پردازش...",
                                        "sSearch": "جستجو:",
                                        "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
                                        "oPaginate": {
                                            "sFirst": "ابتدا",
                                            "sLast": "انتها",
                                            "sNext": "بعدی",
                                            "sPrevious": "قبلی"
                                        },
                                        "oAria": {
                                            "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
                                            "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                                        }
                                    }
                                });
                            });
                        </script>
    @endpush