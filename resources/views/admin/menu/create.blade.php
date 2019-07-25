@extends('layouts.app')

@section('title',__('Menu'))

@push('css')

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Add New Menu Items')}}
                <small>{{__('Preview')}}</small>
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
                            <h3 class="box-title">{{__('Menu')}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{__('Type')}}</label>
                                    <select  class="form-control"  name="type">
                                        @foreach($type as $type)
                                            <option>{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Name')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="{{__('Name')}}" name="name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Items')}}</label>
                                    <select  class="form-control"   name="items">
                                        @foreach($items as $items)
                                            <option>{{$items->title}}</option>
                                        @endforeach

                                    </select>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Label')}}</label>
                                        <select  class="form-control"  name="label">
                                            @foreach($label as $label)
                                                <option>{{$label->label}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Parent')}}</label>
                                        <select class="form-control" name="parent_name">
                                            @foreach($menus as $menu)
                                                @if($menu->label == 'parent')
                                                    <option>
                                                        {{$menu->name}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Create By')}}</label>
                                    <input type="text" class="form-control" id="exampleInputText"  name="created_by" value="{{auth()->user()->name}}">
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