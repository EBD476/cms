@extends('layouts.app')

@section('title',__('Users'))

@push('css')

@endpush

@section('content')
    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <h1>
                                {{__('Add New User')}}
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
                                            <h3 class="box-title">{{__('Users')}}</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('Name')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Name')}}" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('User Name')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('User Name')}}" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Email')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Email')}}" id="exampleInputFile" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Email Verified At')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Email Verified At')}}" id="exampleInputFile" name="email_verified_at">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">{{__('Password')}}</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{__('Password')}}" name="password">
                                                </div>
                                                {{--<div class="form-group">--}}
                                                {{--<label for="exampleInputPassword1">{{__('Confirmed Password')}}</label>--}}
                                                {{--<input type="text" class="form-control" id="exampleInputPassword1" PLACEHOLDER="{{__('Confirmed Password')}}" name="confirmed">--}}
                                                {{--</div>--}}
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Phone')}}</label>
                                                    <input type="text"  class="form-control" placeholder="{{__('Phone')}}" id="exampleInputFile" name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Address')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Address')}}" id="exampleInputFile" name="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Remember Token')}}</label>
                                                    <input type="text" class="form-control" placeholder="{{__('Remember Token')}}" id="exampleInputFile" name="remember_token">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">{{__('Avatar')}}</label>
                                                    <input type="file" id="exampleInputFile" name="image">
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

@endpush