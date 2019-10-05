@extends('layouts.app')

@section('title',__('FAQ'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
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
                    <h3 class="text-themecolor m-b-0 m-t-0">{{__('HANTA ERP System')}}</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}">{{__('Home')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('FAQ Page')}}</li>
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
                            <a href="{{route('faq.create')}}" class="btn btn-primary">{{__('Add New FAQ')}}</a>
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
                                                        style="width: 146px;">{{__('Status')}}
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 146px;">{{__('ID')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 242px;"> {{__('Question')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 242px;"> {{__('Status')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1" aria-label="Age: activate to sort column ascending"
                                                        style="width: 38px;"> {{__('Action')}}
                                                    </th>
                                                </tr>
                                                </thead>
                                    <tbody>

                                    @foreach($faq as $key => $faq)
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" id="inputSchedule"
                                                           name="hp_product_status" value="0">
                                                    <label for="inputSchedule" class=""></label>
                                                </div>
                                            </td>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$faq ->question}}
                                            </td>
                                            <td>
                                                <input type="checkbox" @if ($devices ->status) checked
                                                       @endif class="js-switch"
                                                       data-size="small" data-id="{{$devices->id}}">
                                            </td>
                                            <td>
                                                <a href="{{route('faq.edit',$faq->id)}}" class="btn btn-info btn-sm"><i class="ti-pencil"></i> </a>
                                                <form id ="-form-delete{{$faq->id}}" style="display: none;" method="POST" action="{{route('faq.destroy',$faq->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این مورد اطمینان دارید؟')){
                                                        event.preventDefault();
                                                        document.getElementById('-form-delete{{$faq->id}}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="ti-close"></i></button>
                                            </td>
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
                                $('#table').DataTable({
                                    "language": {
                                        "sEmptyTable":     "هیچ داده ای در جدول وجود ندارد",
                                        "sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                                        "sInfoEmpty":      "نمایش 0 تا 0 از 0 رکورد",
                                        "sInfoFiltered":   "(فیلتر شده از _MAX_ رکورد)",
                                        "sInfoPostFix":    "",
                                        "sInfoThousands":  ",",
                                        "sLengthMenu":     "نمایش _MENU_ رکورد",
                                        "sLoadingRecords": "در حال بارگزاری...",
                                        "sProcessing":     "در حال پردازش...",
                                        "sSearch":         "جستجو:",
                                        "sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",
                                        "oPaginate": {
                                            "sFirst":    "ابتدا",
                                            "sLast":     "انتها",
                                            "sNext":     "بعدی",
                                            "sPrevious": "قبلی"
                                        },
                                        "oAria": {
                                            "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                                            "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                                        }
                                    }
                                } );
                            });
                        </script>
                        <script src="{{asset('backend/js.pro/switchery.min.js')}}"></script>
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
                                            status: $(this)[0].checked  == true ? 1 : 0
                                        };

                                        // $.blockUI();


                                        //token
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
//پاس کردن دیتا به کنترلر
                                        $.ajax({
                                            url: '/admin/article-status',
                                            type: 'POST',
                                            data: data,
                                            dataType: 'json',
                                            async: false,
                                            success: function (data) {
                                                // alert(data.response);
                                                // setTimeout($.unblockUI, 2000);
                                            },
                                            cache: false,
                                        });
                                        //alert($(this)[0].checked);
                                    }
                                });


                            });


                        </script>
    @endpush