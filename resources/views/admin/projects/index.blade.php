@extends('layouts.app')

@section('title',__('Project'))

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
                            <a href="{{route('project.create')}}" class="btn btn-primary">{{__('Add New Project')}}</a>
                            <h4 class="card-title"></h4>
                            <h6 class="card-subtitle"></h6>
                            <div class="table-responsive m-t-40">
                                <div id="myTable_wrapper"
                                     class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table"
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
                                                        style="width: 242px;"> {{__('Project Name')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 106px;"> {{__('Project Owner')}}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 69px;"> {{__('Action')}}
                                                    </th>
                                                </tr>
                                                </thead>
                                    <tbody>

                                    @foreach($projects as $key => $projects)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_name}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_owner}}
                                            </td>
                                            <td>
                                                <a href="{{route('project.edit',$projects->id)}}"class="btn btn-info btn-sm"><i class="ti-pencil"></i></a>
                                                <form id ="-form-delete{{$projects->id}}" style="display: none;" method="POST" action="{{route('project.destroy',$projects->id)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                        event.preventDefault();
                                                        document.getElementById('-form-delete{{$projects->id}}').submit();
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