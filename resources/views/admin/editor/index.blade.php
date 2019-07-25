@extends('layouts.app')

@section('title',__('Publish'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush

@section('content')
    @can('browse-menu-user')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @can('browse-btn-user')
                    <a href="{{route('publish.create')}}" class="btn btn-primary">{{__('Add New Publish')}}</a>
                    @endcan
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Publish')}}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        {{__('ID')}}
                                    </th>
                                    <th>
                                        {{__('User ID')}}
                                    </th>
                                    <th>
                                        {{__('Title')}}
                                    </th>
                                    <th>
                                        {{__('Create At')}}
                                    </th>
                                    <th>
                                        {{__('Update At')}}
                                    </th>
                                    <th>
                                        {{__('action')}}
                                    </th>
                                    </thead>
                                    <tbody>

                                    @foreach($publish as $key => $publish)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$publish ->user_id}}
                                            </td>
                                            <td>
                                                {{$publish -> title}}
                                            </td>
                                            <td>
                                                {{$publish -> created_at}}
                                            </td>
                                            <td>
                                                {{$publish -> updated_at}}
                                            </td>
                                            <td>
                                                @can('browse-btn-user')
                                               <a href="{{route('publish.edit',$publish->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                                <form id ="-form-delete{{$publish->id}}" style="display: none;" method="POST" action="{{route('publish.destroy',$publish->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                    event.preventDefault();
                                                    document.getElementById('-form-delete{{$publish->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                                 @endcan
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
    </div>
        @endcan
        @endsection

        @push('scripts')
            {{--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script>
                $(document).ready(function() {
                    var eventFired = function ( type ) {
                        // var n = $('#demo_info')[0];
                        // n.innerHTML += '<div>'+type+' event - '+new Date().getTime()+'</div>';
                        // n.scrollTop = n.scrollHeight;
                    };

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
                        },
                        "dom": '<"top"i>rt<"top"flp><"clear">'
                    });

                    // $('#table'),
                    //     .on( 'order.dt',  function () { eventFired( 'Order' ); } )
                    //     .on( 'search.dt', function () { eventFired( 'Search' ); } )
                    //     .on( 'page.dt',   function () { eventFired( 'Page' ); } )
                    // .DataTable();
                } );
            </script>
    @endpush