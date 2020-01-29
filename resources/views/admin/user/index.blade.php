@extends('layouts.app')

@section('title',__('Users'))

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
                        <li>{{__('News Page')}}</li>
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
                        <a href="{{ route('user.create') }}" class="btn btn-success">{{__('Insert User')}}</a>
                        <br>
                        <br>
                        <div class="col-lg-10 col-lg-offset-1">
                            <h4><i class="fa fa-users"></i>{{__('User Administration')}}<a
                                        href="{{ route('roles.index') }}"
                                        class="btn btn-default pull-right">Roles</a>
                                <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
                            </h4>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">

                                    <thead>
                                    <tr>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Date/Time Added')}}</th>
                                        <th>{{__('User Roles')}}</th>
                                        <th>{{__('Operations')}}</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                   class="btn btn-info btn-sm"><i class="ti-pencil"></i>
                                                </a>
                                                <button type="button" data-id="{{$user->id}}"
                                                        class="btn btn-danger btn-sm -form-delete"
                                                ><i class="ti-close"></i>
                                                </button>
                                            </td>

                                            {{--<td>--}}
                                            {{--<a href="{{ route('user.edit', $user->id) }}"--}}
                                            {{--class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>--}}

                                            {{--{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id] ]) !!}--}}
                                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                                            {{--{!! Form::close() !!}--}}

                                            {{--</td>--}}
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
    </div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="{{asset('backend/js.pro/switchery.min.js')}}"></script>
<script src="{{asset('backend/js.pro/sweetalert.min.js')}}"></script>
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
<script>
$(document).ready(function () {
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

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
                        url: '/admin/user-destroy/' + data.id,
                        type: 'delete',
                        data: data,
                        dataType: 'json',
                        async: false,
                        success: function (data) {
                            swal("{{__("Poof! Your imaginary file has been deleted!")}}", {
                                icon: "success",
                                Button: "{{__('cancel')}}",
                                Button: "{{__('Done')}}",
                            });
                        },
                        cache: false,
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
@endpush