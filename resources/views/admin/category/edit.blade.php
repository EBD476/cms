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
                        <form method="POST" action="{{route('category.update',$category->id)}}" ENCTYPE="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="title" value="{{$category->name}}">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Slug</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{$category->slug}}">
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
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
@endsection

@push('scripts')

@endpush