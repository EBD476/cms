@extends('layouts_frontend.app')

@section('title','Gallery')

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

                        <ul class="nav nav-pills nav-pills-danger justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#pill1" role="tablist">
                                    All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pill2" role="tablist">
                                    History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pill3" role="tablist">
                                    Satire
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pill4" role="tablist">
                                    Fiction
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="pill1">

                            </div>
                            <div class="tab-pane" id="pill2">

                            </div>
                            <div class="tab-pane" id="pill3">

                            </div>
                            <div class="tab-pane" id="pill4">

                            </div>
                        </div>

                    </div>
                </div>

                <!--     *********    END PROJECTS 1      *********      -->


                <!--     *********    PROJECTS 2     *********      -->

                <div class="projects-2">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto text-center">
                                <h6 class="text-muted">Our work</h6>
                                <h2 class="title">Some of Our Awesome Products - 2</h2>
                                <h5 class="description">This is the paragraph where you can write more details about
                                    your projects. Keep you user engaged by providing meaningful information.</h5>
                                <div class="section-space"></div>
                            </div>
                        </div>
                        <div class="row">
                        @foreach($image as $images)
                                <div class="col-md-4">
                                    <div class="card card-plain">
                                        <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"
                                           target="_blank">
                                            <div class="card-image">
                                                <img class="img-raised rounded"
                                                     src="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg?1449352503"/>
                                            </div>
                                        </a>
                                        <div class="card-body">

                                            <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"
                                               target="_blank">
                                                <h4 class="card-title">Light Bootstrap Dashboard Pro</h4>
                                            </a>
                                            <h6 class="category text-primary">{{$images->hg_name}}</h6>
                                            <p class="card-description">
                                                {{$images->hg_description}} </p>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        </div>

                </div>
                </div>
                <!--     *********    END PROJECTS 2      *********      -->

@endsection

@push('scripts')

@endpush