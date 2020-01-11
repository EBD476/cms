@extends('layouts_frontend.app')

{{--@foreach($pages as $pages)--}}

@section('title',__('Video'))

@push('css')

@endpush

@section('content')
    <section class="space"></section>
    <div class="cd-section" id="projects">
        <!--     *********    PROJECTS 1     *********      -->
        <div class="cd-section" id="projects">
            <!--     *********    PROJECTS 1     *********      -->
            <div class="projects-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">{{__('Video')}}</h2>
                            {{--@foreach($image as $key=>$images)--}}
                            <ul class="nav nav-pills nav-pills-danger justify-content-center" role="tablist">
                                @foreach($video as $key=>$videos)
                                    @if($videos->hv_status == 1)
                                        <li class="nav-item">
                                            <a @if($key + 1 == 1) class="nav-link active" @else class="nav-link"
                                               @endif data-toggle="tab" href="#{{$key + 1}}" role="tablist">
                                                {{__($videos->hv_category)}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            {{--@endforeach--}}
                            <div class="tab-content tab-space">
                                @foreach($video as $key=>$videos_filter)
                                    @if($videos->hv_status == 1)
                                        @if($videos_filter->hv_category == $videos->hv_category)
                                            <div @if($key + 1 == 1) class="tab-pane active" @else class="tab-pane"
                                                 @endif id="{{$key + 1}}">
                                                {{--<video src="{{asset('upload/video/'.$videos_filter->hv_video)}}" loop--}}
                                                       {{--muted playsinline uk-video="autoplay: inview"></video>--}}
                                                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" loop muted playsinline uk-video="autoplay: inview"></video>

                                                <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro"
                                                   target="_blank">
                                                    <h4 class="card-title">{{$videos_filter->hv_title}}</h4>
                                                </a>
                                                <h6 class="category text-primary">{{$videos_filter->id}}</h6>
                                                {{--<p class="card-description">--}}
                                                {{--{{$videos_filter->hg_description}} </p>--}}
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

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            UIkit.video(element, options);
        });
    </script>
@endpush
