@extends('layouts_frontend.app')

@section('title',__('Project'))

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
                        <h2 class="title">{{__('Some of Our Awesome Project')}}</h2>

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
                @foreach($project as $project)
                    <div class="col-md-6 px-0">
                        <div class="card card-background card-background-product card-no-shadow" style="background-image: url({{asset('upload/project/'.$project->hp_project_image)}})">
                            <div class="card-body">
                                <h6 class="category">{{$project->hp_project_name}}</h6>
                                <h3 class="card-title">
                                    {{$project->hp_project_name}}
                                </h3>

                                <p class="card-description">
                                    {{$project->hp_project_name}} </p>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    <i class="now-ui-icons ui-1_send"></i> View Book
                                </a>
                             </div>
                           </div>
                        </div>
                    @endforeach
                    </div>


                </div>

            </div>


        <!--     *********    END PROJECTS 1      *********      -->


        <!--     *********    PROJECTS 2     *********      -->

        <div class="projects-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h6 class="text-muted">{{__('All Projects')}}</h6>
                        <h2 class="title">{{__('Hanta IBMS')}}</h2>
                        <h5 class="description">{{__('View All')}}</h5>
                        <div class="section-space"></div>
                    </div>
                </div>
                <div class="row">
                @foreach($project2 as $key=>$project2)
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
                                <div class="card-image">
                                    <img class="img-raised rounded" src="{{asset('upload/project/'.$project2->hp_project_image)}}"/>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="https://www.creative-tim.com/product/now-ui-kit" target="_blank">
                                    <h4 class="card-title">{{$project2->hp_project_owner}}</h4>
                                </a>
                                <h6 class="category text-primary">{{$project2->hp_project_type}}</h6>
                                <p class="card-description">
                                   {{$project2->hp_project_description}}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        <!--     *********    END PROJECTS 2      *********      -->
        </div>
@endsection

@push('scripts')

@endpush
