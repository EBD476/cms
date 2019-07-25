@extends('layouts.app')

@section('title',__('Device Config'))

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
            <a href="{{route('config.create')}}" class="btn btn-primary">{{__('Add New Device Config')}}</a>
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
                                        {{__('Device ID')}}
                                    </th>
                                    <th>
                                        {{__('Device Serial')}}
                                    </th>
                                    <th>
                                        {{__('Control Config')}}
                                    </th>
                                    <th>
                                        {{__('Create At')}}
                                    </th>
                                    <th>
                                        {{__('Action')}}
                                    </th>
                                    </thead>
                                    <tbody>

                                    @foreach($config as $key => $config)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$config ->hdc_device_id}}
                                            </td>
                                            <td>
                                                {{$config ->hdc_device_serial}}
                                            </td>
                                            <td>
                                                {{$config ->hdc_control_config}}
                                            </td>
                                            <td>
                                                {{$config -> created_at}}
                                            </td>
                                            <td>
                                                <a href="{{route('config.edit',$config->id)}}" class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                                                    <form id ="-form-delete{{$config->id}}" style="display: none;" method="POST" action="{{route('config.destroy',$config->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                            event.preventDefault();
                                                            document.getElementById('-form-delete{{$config->id}}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons"><i class="fa fa-fw fa-times"></i></i></button>
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