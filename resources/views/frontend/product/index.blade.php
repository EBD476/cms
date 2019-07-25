@extends('layouts_frontend.app')

@section('title',__('Product'))

@push('css')

@endpush

@section('content')

    <section class="space"></section>
    <!--     *********    PROJECTS 5     *********      -->

    <div class="projects-5">

        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{__('Some of Our Awesome Product')}}</h2>
                    <h4 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h4>
                    <div class="section-space"></div>
                </div>
            </div>
            @foreach($product as $product)
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="card card-background card-background-product card-raised" style="background-image: url({{asset('upload/product/'.$product->hp_product_image)}});">
                        <div class="card-body">
                            <h2 class="card-title">{{$product->hp_product_name}}</h2>
                            <p class="card-description">
                                {{$product->hp_product_model}}</p>
                            {{--<label class="badge badge-neutral">Analytics</label>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mr-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="now-ui-icons ui-2_chat-round"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">{{$product->hp_product_name}}</h4>
                            <p class="description">
                                {{$product->hp_product_description}}</p>
                        </div>
                    </div>
                </div>

            </div>

            <hr />
        </div>
        @endforeach
    </div>


    <!--     *********    END PROJECTS 5      *********      -->

    </div>
    <!--     *********    PRICING 1    *********      -->
    <div class="cd-section" id="pricing">
        <!--     *********    PRICING 1     *********      -->

        <div class="pricing-1 section-image" id="pricing-1" style="background-image: url({{asset('assets/img/pricing1.jpg')}})">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title">Pick the best plan for you</h2>
                        <h4 class="description ">You have Free Unlimited Updates and Premium Support on each package.</h4>
                        <div class="section-space"></div>
                    </div>
                </div>
                <div class="row">
                    @foreach($product2 as $product2)

                            <div class="col-md-3">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <h5 class="category">{{$product2->hp_product_name}}</h5>
                                        <div class="icon icon-primary">
                                            <i class="now-ui-icons objects_diamond"></i>
                                        </div>
                                        <h3 class="card-title">${{$product2->hp_product_price}}</h3>
                                        <ul>
                                            <li>{{$product2->hp_product_model}}</li>
                                            <li>{{$product2->hp_product_description}}</li>
                                        </ul>
                                        <a href="#pablo" class="btn btn-primary btn-round">{{__('Add to Cart')}}</a>
                                    </div>
                                </div>
                            </div>

                    @endforeach
                </div>
            </div>
        </div>

        <!--     *********    END PRICING 1      *********      -->
    <!--     *********   END PRICING 1    *********      -->
@endsection

@push('scripts')

@endpush
