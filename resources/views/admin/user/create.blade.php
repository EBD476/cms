@extends('layouts.app')

@section('title',__('Users'))

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="page-wrapper" style="min-height: 177px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row page-titles">
                {{--<div class="col-md-5 col-8 align-self-center">--}}
                {{--<h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3>--}}
                {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item">--}}
                {{--<a href="javascript:void(0)">Home</a>--}}
                {{--</li>--}}
                {{--<li class="breadcrumb-item active">Table Data table</li>--}}
                {{--</ol>--}}
                {{--</div>--}}
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
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
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
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
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                                <i class="ti-settings text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>            <!-- Content Header (Page header) -->

            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="{{route('user.index')}}"> {{__('Users')}}</a></li>
                </ol>
            </section>

            <!-- /.content-wrapper -->
            <!-- Main content -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{--<h4 class="card-title">Basic Material inputs</h4>--}}
                            {{--<h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.--}}
                            {{--</h6>--}}

                            <section class="content">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-8">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('User')}}</h3>
                                            </div>
                                            <!-- Content Wrapper. Contains page content -->
                                            <hr>

                                            {{ Form::open(array('url' => 'admin/user')) }}

                                            <div class="form-group">
                                                {{ Form::label('name', 'Name') }}
                                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('username', 'User Name') }}
                                                {{ Form::text('username', '', array('class' => 'form-control')) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('email', 'Email') }}
                                                {{ Form::email('email', '', array('class' => 'form-control')) }}
                                            </div>

                                            @foreach ($roles as $role)
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-info">
                                                        <input type="checkbox" id="inputSchedule" name="roles[]"
                                                               value="{{$role->id }}">
                                                        <label for="inputSchedule" class="">
                                                            <span>{{$role->name}}</span> </label>
                                                    </div>
                                                </div>
                                            @endforeach


                                            <div class="form-group">
                                                {{ Form::label('password', 'Password') }}<br>
                                                {{ Form::password('password', array('class' => 'form-control')) }}

                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('password', 'Confirm Password') }}<br>
                                                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                                            </div>

                                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                            {{ Form::close() }}

                                        </div>
@endsection