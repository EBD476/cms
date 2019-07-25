@extends('layouts.app')

@section('title',__('Project'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Data Tables')}}
                <small>advanced tables</small>
            </h1>
            <a href="{{route('project.create')}}" class="btn btn-primary">{{__('Add New Project')}}</a>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                <li><a href="#">{{__('Tables')}}</a></li>
                <li class="active">{{__('Data tables')}}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">{{__('Hover Data Table')}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                                <table id="table" class="table table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        {{__('ID')}}
                                    </th>
                                    <th>
                                        {{__('Project Name')}}
                                    </th>
                                    <th>
                                        {{__('Project Owner')}}
                                    </th>
                                    <th>
                                        {{__('Project Type')}}
                                    </th>
                                    <th>
                                        {{__('Project Units')}}
                                    </th>
                                    <th>
                                        {{__('Project Location')}}
                                    </th>
                                    <th>
                                        {{__('Project Options')}}
                                    </th>
                                    <th>
                                        {{__('Project Complete Date')}}
                                    </th>
                                    <th>
                                        {{__('Create At')}}
                                    </th>
                                    <th>
                                        {{__('Action')}}
                                    </th>
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
                                                {{$projects ->hp_project_type}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_units}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_location}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_options}}
                                            </td>
                                            <td>
                                                {{$projects ->hp_project_complete_date}}
                                            </td>
                                            <td>
                                                {{$projects -> created_at}}
                                            </td>
                                            <td>
                                                <a href="{{route('project.edit',$projects->id)}}"class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                                                <form id ="-form-delete{{$projects->id}}" style="display: none;" method="POST" action="{{route('project.destroy',$projects->id)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                        event.preventDefault();
                                                        document.getElementById('-form-delete{{$projects->id}}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="fa fa-fw fa-times"></i></button>
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