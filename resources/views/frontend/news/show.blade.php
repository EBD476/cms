@extends('layouts.app')

@section('title','Title')

@push('css')

@endpush

@section('content')
    <div class="blogs-2" id="blogs-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <h2 class="title">Latest Blogposts 2</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="./assets/img/examples/card-blog4.jpg">
                                    </a>
                                    <div class="colored-shadow" style="background-image: url(&quot;./assets/img/examples/card-blog4.jpg&quot;); opacity: 1;"></div></div>
                                <div class="card-body">
                                    <h6 class="card-category text-info">Enterprise</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                        <a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="./assets/img/examples/blog5.jpg">
                                    </a>
                                    <div class="colored-shadow" style="background-image: url(&quot;./assets/img/examples/blog5.jpg&quot;); opacity: 1;"></div></div>
                                <div class="card-body ">
                                    <h6 class="card-category text-success">
                                        Startups
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Lyft launching cross-platform service this week</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                        <a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="./assets/img/examples/blog7.jpg">
                                    </a>
                                    <div class="colored-shadow" style="background-image: url(&quot;./assets/img/examples/blog7.jpg&quot;); opacity: 1;"></div></div>
                                <div class="card-body ">
                                    <h6 class="card-category text-danger">
                                        <i class="material-icons">trending_up</i> Enterprise
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">6 insights into the French Fashion landscape</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                        <a href="#pablo"> Read More </a>
                                    </p>
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