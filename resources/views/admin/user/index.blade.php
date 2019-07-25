@extends('layouts.app')

@section('title',__('Users'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Data Tables')}}
                <small>{{__('advanced tables')}}</small>
            </h1>
            <a href="{{route('user.create')}}" class="btn btn-primary">{{__('Add New User')}}</a>
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
                            <th >
                                {{__('Name')}}
                            </th>
                            <th>
                                {{__('Email')}}
                            </th>
                            <th>
                                {{__('Phone')}}
                            </th>

                            <th>
                                {{__('Address')}}
                            </th>
                            <th>
                                {{__('role_id')}}
                            </th>

                            <th>
                                {{__('Create At')}}
                            </th>

                            <th>
                                {{__('action')}}
                            </th>

                            </thead>

                            <tbody>

                            @foreach($dataUser as $key =>$dataUser)

                                <tr>
                                    <td>
                                        {{$key + 1}}
                                    </td>
                                    <td>
                                        {{$dataUser ->name}}
                                    </td>
                                    <td>
                                        {{$dataUser -> email}}
                                    </td>
                                    <td>
                                        {{$dataUser -> phone}}
                                    </td>
                                    <td>
                                        {{$dataUser -> address}}
                                    </td>
                                    <td>
                                        {{$dataUser -> role_id}}
                                    </td>
                                    <td>
                                        {{$dataUser -> created_at}}
                                    </td>
                                        <td>
                                            <a href="{{route('user.edit',$dataUser->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                            <form id ="-form-delete{{$dataUser->id}}" style="display: none;" method="POST" action="{{route('user.destroy',$dataUser->id)}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این کاربر اطمینان دارید؟')){
                                                    event.preventDefault();
                                                    document.getElementById('-form-delete{{$dataUser->id}}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i class="material-icons">delete</i></button>
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
        </section>
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