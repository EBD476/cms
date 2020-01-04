@extends('layouts_frontend.app')

@section('title',__('Gallery'))

@push('css')

@endpush

@section('content')
    <div class="cd-section" id="projects">
        <!--     *********    PROJECTS 1     *********      -->
        <div class="projects-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">{{__('Gallery')}}</h2>
                        {{--@foreach($image as $key=>$images)--}}
                        <ul class="nav nav-pills nav-pills-danger justify-content-center" role="tablist">
                            @foreach($image as $key=>$images)
                                @if($images->hg_show == 1)
                                <li class="nav-item">
                                    <a @if($key + 1 == 1) class="nav-link active" @else class="nav-link" @endif data-toggle="tab" href="#{{$key + 1}}" role="tablist">
                                        {{__($images->hg_category_name)}}
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        {{--@endforeach--}}
                        <div class="tab-content tab-space">
                            @foreach($image as $key=>$images)
                                @if($images->hg_show == 1)
                                @if($images->hg_category_name == $images->hg_category_name)
                                    <div @if($key + 1 == 1) class="tab-pane active" @else class="tab-pane"   @endif id="{{$key + 1}}" >
                                        <div class="col-4">
                                            <div class="card-image">
                                                <div class="card-image">
                                                    <img class="img-raised rounded"
                                                         src="{{asset('img/gallery/'.$images->hg_image)}}"/>
                                                    <div class="card-body">

                                                        <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"
                                                           target="_blank">
                                                            <h4 class="card-title">{{$images->hg_name}}</h4>
                                                        </a>
                                                        <h6 class="category text-primary">{{$images->hg_code}}</h6>
                                                        <p class="card-description">
                                                            {{$images->hg_description}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>

                <!--     *********    END PROJECTS 1      *********      -->


                <!--     *********    PROJECTS 2     *********      -->

                {{--<div class="projects-2">--}}

                    {{--<div class="container">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8 ml-auto mr-auto text-center">--}}
                                {{--<h6 class="text-muted">Our work</h6>--}}
                                {{--<h2 class="title">Some of Our Awesome Products - 2</h2>--}}
                                {{--<h5 class="description">This is the paragraph where you can write more details about--}}
                                    {{--your projects. Keep you user engaged by providing meaningful information.</h5>--}}
                                {{--<div class="section-space"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--@foreach($image as $images)--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="card card-plain">--}}
                                        {{--<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"--}}
                                           {{--target="_blank">--}}
                                            {{--<div class="card-image">--}}
                                                {{--<img class="img-raised rounded"--}}
                                                     {{--src="{{asset('img/gallery/'.$images->hg_image)}}"/>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                        {{--<div class="card-body">--}}

                                            {{--<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"--}}
                                               {{--target="_blank">--}}
                                                {{--<h4 class="card-title">Light Bootstrap Dashboard Pro</h4>--}}
                                            {{--</a>--}}
                                            {{--<h6 class="category text-primary">{{$images->hg_name}}</h6>--}}
                                            {{--<p class="card-description">--}}
                                                {{--{{$images->hg_description}} </p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
                <!--     *********    END PROJECTS 2      *********      -->

@endsection

@push('scripts')

@endpush