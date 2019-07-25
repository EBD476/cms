@extends('layouts.app')

@section('title',__('Project'))

@push('css')
    <link href="{{asset('backend/style/kamadatepicker.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Add New Project')}}
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                <li><a href="#">{{__('Forms')}}</a></li>
                <li class="active">{{__('General Elements')}}</li>
            </ol>
        </section>

        <!-- /.content-wrapper -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{__('Project')}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Project Name')}}</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Project Name')}}" name="hp_project_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Owner')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Project Owner')}}" id="exampleInputFile" name="hp_project_owner">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Type')}}</label>
                                    <select type="text" class="form-control"  name="hp_project_type">
                                        @foreach($type as $type)
                                            <option>
                                                {{$type->hp_project_type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Units')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Project Units')}}" id="exampleInputFile" name="hp_project_units">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Location')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Project Location')}}" id="exampleInputFile" name="hp_project_location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Description')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Project Description')}}" id="exampleInputFile" name="hp_project_description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Options')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Project Options')}}" id="exampleInputFile" name="hp_project_options">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Project Complete Date')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Project Complete Date')}}" name="hp_project_complete_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('project Image')}}</label>
                                    <input type="file"  id="exampleInputFile" name="hp_project_image">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">{{__('Check me out')}}
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                            </div>
                        </form>
                    </div>

@endsection

@push('scripts')
                        <script src="{{asset('backend/src/kamadatepicker.min.js')}}"></script>
                        <script>
                            kamaDatepicker('test-date-id', { buttonsColor: "blue",
                                forceFarsiDigits: true,
                                nextButtonIcon: "fa fa-arrow-circle-right",
                                previousButtonIcon: "fa fa-arrow-circle-left"});
                        </script>

@endpush