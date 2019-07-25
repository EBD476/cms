@extends('layouts.app')

@section('title',__('Dealership'))

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
            <a href="{{route('dealership.create')}}" class="btn btn-primary">{{__('Add New Dealership')}}</a>
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
                                        {{__('Dealership Code')}}
                                    </th>
                                    <th>
                                        {{__('Dealership City')}}
                                    </th>
                                    <th>
                                        {{__('Dealership Agent')}}
                                    </th>
                                    <th>
                                        {{__('Dealership Phone')}}
                                    </th>
                                    <th>
                                        {{__('Dealership State')}}
                                    </th>
                                    <th>
                                        {{__('Create At')}}
                                    </th>
                                    <th>
                                        {{__('Action')}}
                                    </th>
                                    </thead>
                                    <tbody>

                                    @foreach($dealerships as $key => $dealerships)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$dealerships ->hds_dealership_code}}
                                            </td>
                                            <td>
                                                {{$dealerships ->hds_dealership_city}}
                                            </td>
                                            <td>
                                                {{$dealerships ->hds_dealership_agent}}
                                            </td>
                                            <td>
                                                {{$dealerships ->hds_dealership_phone}}
                                            </td>
                                            <td>
                                                {{$dealerships ->hds_dealership_state}}
                                            </td>
                                            <td>
                                                {{$dealerships -> created_at}}
                                            </td>
                                            <td>
                                                <a href="{{route('dealership.edit',$dealerships->id)}}" class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i> </a>
                                                <form id ="-form-delete{{$dealerships->id}}" style="display: none;" method="POST" action="{{route('dealership.destroy',$dealerships->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('آیا از حذف این محصول اطمینان دارید؟')){
                                                        event.preventDefault();
                                                        document.getElementById('-form-delete{{$dealerships->id}}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="fa fa-fw fa-times"></i></button>
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
                    $('#table').DataTable();
                } );
            </script>
    @endpush