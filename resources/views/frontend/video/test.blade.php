@extends('layouts_frontend.app')

{{--@foreach($pages as $pages)--}}

@section('title',$page->title)

@push('css')

@endpush

@section('content')
    <section class="space"></section>
    <div class="cd-section" id="projects">
        <!--     *********    PROJECTS 1     *********      -->
        <div class="projects-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">{{$page->title}}</h2>

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

                <div class="row">
                    <div class="col-md-6 px-0">
                        <div class="card card-background card-background-product card-no-shadow" style="background-image: url('{{asset('upload/pages/'.$page->image)}}')">

                            <div class="card-body">
                                <h6 class="category">History</h6>
                                <h3 class="card-title">
                                    The City Lost & Found
                                </h3>

                                <p class="card-description">
                                    Developed on the occasion of an exhibition of the same name, The City Lost & Found: Capturing New York...
                                </p>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    <i class="now-ui-icons ui-1_send"></i> View Book
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 px-0">
                        <div class="card card-raised card-background card-background-product card-no-shadow"  style="background-image: url({{asset('upload/pages/'.$page->image2)}})">
                            <div class="card-body">
                                <h6 class="category">Satire</h6>
                                <h3 class="card-title">A Confederacy of Dunces</h3>
                                <p class="card-description">
                                    Satires, in the most basic definition, are works making fun of some sort of person or institution...
                                </p>
                                <a href="#pablo" class="btn btn-neutral btn-round">
                                    <i class="now-ui-icons ui-1_send"></i> View more
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 px-0">
                        <div class="card card-background card-background-product card-no-shadow" style="background-image: url({{asset('upload/pages/'.$page->image3)}})">
                            <div class="card-body">
                                <h6 class="category">Fiction</h6>
                                <h3 class="card-title">The Sun Also Rises</h3>
                                <p class="card-description">
                                    The most commonly read works are works of fiction. Fiction books are ones that have been made up...
                                </p>
                                <a href="#pablo" class="btn btn-neutral btn-round">
                                    <i class="now-ui-icons ui-1_send"></i> Read Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 px-0">
                        <div class="card card-background card-background-product card-no-shadow" style="background-image: url({{asset('upload/pages/'.$page->image4)}})">
                            <div class="card-body">
                                <h6 class="category">Basic Civitas</h6>
                                <h3 class="card-title">The Right Mistake</h3>
                                <p class="card-description">
                                    Living in South Central L.A., Socrates Fortlow is a sixty-year-old ex-convict, still strong enough to kill men with...
                                </p>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    <i class="now-ui-icons ui-1_send"></i> Read Now
                                </a>
                            </div>
                        </div>
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
                        <h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
                        <div class="section-space"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
                                <div class="card-image">
                                    <img class="img-raised rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/38/original/opt_mk_thumbnail.jpg?1458052306"/>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
                                    <h4 class="card-title">Now UI Kit Free</h4>
                                </a>
                                <h6 class="category text-primary">Free UI Kit</h6>
                                <p class="card-description">
                                    Now UI Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Invision. It's a great pleasure to introduce to you the Now UI concepts in an easy to use and beautiful set of components.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                <div class="card-image">
                                    <img class="img-raised rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg?1449352503" />
                                </div>
                            </a>
                            <div class="card-body">

                                <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                    <h4 class="card-title">Light Bootstrap Dashboard Pro</h4>
                                </a>
                                <h6 class="category text-primary">{{$page->title}}</h6>
                                <p class="card-description">
                                    {{$page->description}} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                <div class="card-image">
                                    <img class="img-raised rounded" src="https://s3.amazonaws.com/creativetim_bucket/products/26/original/opt_gsdk_new_thumbnail.jpg" />
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                    <h4 class="card-title">Get Shit Done Kit PRO</h4>
                                </a>
                                <h6 class="category text-primary">Premium UI Kit</h6>
                                <p class="card-description">
                                    Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--     *********    END PROJECTS 2      *********      -->
@endsection

@push('scripts')

@endpush
