@extends('layouts.app')

@section('title',__('Pages'))

@push('css')

@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__('Add New Pages')}}
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
                            <h3 class="box-title">{{__('Pages')}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('pages.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Title')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Title')}}" id="exampleInputFile" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Page Slug')}}</label>
                                    <input type="text"  class="form-control" placeholder="{{__('Page Slug')}}" id="exampleInputFile" name="page_slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Description')}}</label>
                                    <textarea type="text" class="form-control" id="summary-ckeditor" placeholder="{{__('Description')}}"  name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Image 1')}}</label>
                                    <input type="file" class="form-control" id="exampleInputFile"  name="image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Image 2')}}</label>
                                    <input type="file" class="form-control" id="exampleInputFile"  name="image2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Image 3')}}</label>
                                    <input type="file" class="form-control" id="exampleInputFile"  name="image3">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Image 4')}}</label>
                                    <input type="file" class="form-control" id="exampleInputFile"  name="image4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Cannonical Link')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Cannonical Link')}}" id="exampleInputFile" name="cannonical_link">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Seo Title')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Seo Title')}}" id="exampleInputFile" name="seo_title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Seo Keyword')}}</label>
                                    <input type="text" class="form-control" placeholder="{{__('Seo Keyword')}}" id="exampleInputFile" name="seo_keyword">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Seo Description')}}</label>
                                    <input type="text" class="form-control" id="exampleInputFile" placeholder="{{__('Seo Description')}}" name="seo_description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Status')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Status')}}" name="status">
                                </div
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Created By')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Created By')}}" name="created_by">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('Update By')}}</label>
                                    <input type="text" class="form-control" id="test-date-id" placeholder="{{__('Update By')}}" name="updated_by">
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
                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace( 'summary-ckeditor' );
                        </script>
@endpush