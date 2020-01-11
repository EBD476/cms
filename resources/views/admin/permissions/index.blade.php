@extends('layouts.app')

@section('title',__('Permissions'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link href="{{asset('backend/css.pro/switchery.min.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i>Available Permissions

            <a href="{{ route('user.index') }}" class="btn btn-default pull-right">Users</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit',$permission->id)}}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--<a href="{{ URL::to('admin/permissions/create') }}" class="btn btn-success">Add Permission</a>--}}

    </div>
 @endsection

        {{--@push('scripts')--}}
            {{--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
            {{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>--}}
            {{--<script src="{{asset('backend/js.pro/switchery.min.js')}}"></script>--}}
            {{--<script>--}}
                {{--$(document).ready(function() {--}}
                    {{--$('#table').DataTable({--}}
                        {{--"language": {--}}
                            {{--"sEmptyTable":     "هیچ داده ای در جدول وجود ندارد",--}}
                            {{--"sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ رکورد",--}}
                            {{--"sInfoEmpty":      "نمایش 0 تا 0 از 0 رکورد",--}}
                            {{--"sInfoFiltered":   "(فیلتر شده از _MAX_ رکورد)",--}}
                            {{--"sInfoPostFix":    "",--}}
                            {{--"sInfoThousands":  ",",--}}
                            {{--"sLengthMenu":     "نمایش _MENU_ رکورد",--}}
                            {{--"sLoadingRecords": "در حال بارگزاری...",--}}
                            {{--"sProcessing":     "در حال پردازش...",--}}
                            {{--"sSearch":         "جستجو:",--}}
                            {{--"sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",--}}
                            {{--"oPaginate": {--}}
                                {{--"sFirst":    "ابتدا",--}}
                                {{--"sLast":     "انتها",--}}
                                {{--"sNext":     "بعدی",--}}
                                {{--"sPrevious": "قبلی"--}}
                            {{--},--}}
                            {{--"oAria": {--}}
                                {{--"sSortAscending":  ": فعال سازی نمایش به صورت صعودی",--}}
                                {{--"sSortDescending": ": فعال سازی نمایش به صورت نزولی"--}}
                            {{--}--}}
                        {{--}--}}
                    {{--} );--}}
                {{--});--}}
            {{--</script>--}}
            {{--<script>--}}
                {{--$(document).ready(function () {--}}
                    {{--var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));--}}
                    {{--$('.js-switch').each(function () {--}}
                        {{--new Switchery($(this)[0], $(this).data());--}}

                        {{--$(this)[0].onchange = function () {--}}
{{--//ارسال بخشی از دیتا ی فرم . زمانی که به کل اطلاعات فرم نیازی نیست یا فرمی وجود ندارد--}}
                            {{--var data = {--}}
                                {{--id: $(this).data('id'),--}}
                                {{--//اینپوت هایی که به کنترلر request داده می شود اینجا ساخته شده است.--}}
                                {{--status: $(this)[0].checked == true ? 1 : 0--}}
                            {{--};--}}

                            {{--// $.blockUI();--}}


                            {{--//token--}}
                            {{--$.ajaxSetup({--}}
                                {{--headers: {--}}
                                    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                                {{--}--}}
                            {{--});--}}
{{--//پاس کردن دیتا به کنترلر--}}
                            {{--$.ajax({--}}
                                {{--url: '/admin/user',--}}
                                {{--type: 'POST',--}}
                                {{--data: data,--}}
                                {{--dataType: 'json',--}}
                                {{--async: false,--}}
                                {{--success: function (data) {--}}
                                    {{--// alert(data.response);--}}
                                    {{--// setTimeout($.unblockUI, 2000);--}}
                                {{--},--}}
                                {{--cache: false,--}}
                            {{--});--}}
                            {{--//alert($(this)[0].checked);--}}
                        {{--}--}}
                    {{--});--}}
                    {{--$('.-form-delete').on('click', function (event) {--}}

                        {{--var data = {--}}
                            {{--id: $(this).data('id'),--}}
                        {{--};--}}
                        {{--//token--}}
                        {{--$.ajaxSetup({--}}
                            {{--headers: {--}}
                                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                            {{--}--}}
                        {{--});--}}
                        {{--swal({--}}
                            {{--// title: "",--}}
                            {{--text: "{{__('Are you sure?')}}",--}}
                            {{--Button: "{{__('Done')}}",--}}
                            {{--icon: "warning",--}}
                            {{--buttons: true,--}}
                            {{--dangerMode: true,--}}
                        {{--})--}}
                            {{--.then((willDelete) => {--}}
                                {{--if (willDelete) {--}}
                                    {{--$.ajax({--}}
                                        {{--url: '/admin/user-destroy/' + data.id,--}}
                                        {{--type: 'delete',--}}
                                        {{--data: data,--}}
                                        {{--dataType: 'json',--}}
                                        {{--async: false,--}}
                                        {{--success: function (data) {--}}
                                        {{--},--}}
                                        {{--cache: false,--}}
                                    {{--});--}}
                                    {{--swal("{{__("Poof! Your imaginary file has been deleted!")}}", {--}}
                                        {{--icon: "success",--}}
                                        {{--Button: "{{__('Done')}}",--}}
                                        {{--Button: "{{__('cancel')}}",--}}
                                    {{--});--}}
                                    {{--location.reload();--}}
                                {{--} else {--}}
                                    {{--swal(--}}
                                        {{--"{{__("Your imaginary file is safe!")}}",--}}
                                        {{--{Button: "{{__('Done')}}"}--}}
                                    {{--);--}}

                                {{--}--}}
                            {{--});--}}
                    {{--});--}}

                {{--});--}}


            {{--</script>--}}

        {{--@endpush--}}