@extends('layouts.app')

@section('title','Category')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.Msg')
                </div>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Edit Category</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <form id="form1" ENCTYPE="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">{{__('Name')}}</label>
                                        <input type="text" class="form-control" name="title" value="{{$category->name}}" id="name" data-id="{{$category->id}}">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Slug</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{$category->slug}}" id="sub_title">
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('category')}}" class="btn badge-danger">Back</a>

                            <button type="submit" class="btn badge-primary">Save</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('backend/js.pro/jquery.blockUI.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#form1").submit(function (event) {
                var data ={
                    sub_title : $("#sub_title").val(),
                    id:$("#name").val(),
                    id:$("#name").data('id'),
                }
                event.preventDefault();
                $.blockUI();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.blockUI({
                    message: '{{__('please wait...')}}', css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });
                $.ajax({
                    url: '/admin/category/'+data.id,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    method:'put',
                    async: false,
                    success: function (data) {
                        setTimeout($.unblockUI, 2000);
                        location.reload();
                    },
                    cache: false,
                });
            });
        });
    </script>
@endpush