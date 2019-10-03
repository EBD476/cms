@extends('layouts.app')

@section('title','Title')

@push('css')

@endpush

@section('content')
    <div class="card card-plain card-blog">
        <div class="row">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <img class="img img-raised" src="./assets/img/examples/card-blog4.jpg">
                    <div class="colored-shadow" style="background-image: url(&quot;./assets/img/examples/card-blog4.jpg&quot;); opacity: 1;"></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category text-info">Enterprise</h6>
                <h3 class="card-title">
                    <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                </h3>
                <p class="card-description">
                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
                    <a href="#pablo"> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="#pablo">
                        <b>Mike Butcher</b>
                    </a>, 2 days ago
                </p>
            </div>
        </div>
    </div>
    <div class="card card-plain card-blog">
        <div class="row">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <a href="#pablo">
                        <img class="img img-raised" src="./assets/img/office2.jpg">
                    </a>
                    <div class="colored-shadow" style="background-image: url(&quot;./assets/img/office2.jpg&quot;); opacity: 1;"></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category text-danger">
                    <i class="material-icons">trending_up</i> Trending
                </h6>
                <h3 class="card-title">
                    <a href="#pablo">6 insights into the French Fashion landscape</a>
                </h3>
                <p class="card-description">
                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
                    <a href="#pablo"> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="#pablo">
                        <b>Mike Butcher</b>
                    </a>, 2 days ago
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush