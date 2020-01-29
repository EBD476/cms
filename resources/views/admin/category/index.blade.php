@extends('layouts.app')

@section('title','Category')

@push('css')
    <link href="{{asset('backend/css.pro/dataTables.bootstrap.min.css')}}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add New</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Categories</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        name
                                    </th>
                                    <th>
                                        slug
                                    </th>
                                    <th>
                                        Create At
                                    </th>
                                    <th>
                                        Update At
                                    </th>
                                    <th>
                                        action
                                    </th>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $key => $category)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$category -> name}}
                                            </td>
                                            <td>
                                                {{$category -> slug}}
                                            </td>
                                            <td>
                                                {{$category -> created_at}}
                                            </td>
                                            <td>
                                                {{$category -> updated_at}}
                                            </td>
                                            <td>
                                               <a href="{{route('category.edit',$category->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                                <form id ="-form-delete{{$category->id}}" style="display: none;" method="POST" action="{{route('category.destroy',$category->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('Are You Sure Delete This?')){
                                                    event.preventDefault();
                                                    document.getElementById('-form-delete{{$category->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="ti-close">delete</i></button>
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
                        "ajax": '/admin/json-data',
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