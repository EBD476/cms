@extends('layouts.app')

@section('title',__('Setting'))

@push('css')

@endpush

@section('content')
    <div class="page-wrapper" style="min-height: 177px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Table Data table</li>
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>THIS MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0">
                                    <small>LAST MONTH</small>
                                </h6>
                                <h4 class="m-t-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart">
                                    <canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                                <i class="ti-settings text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{__('Insert Product')}}
                    <small>{{__('Preview')}}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Forms')}}</a></li>
                    <li class="active">{{__('General Elements')}}</li>
                </ol>
            </section>
            <!-- /.content-wrapper -->
            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Material inputs</h4>
                            <h6 class="card-subtitle">Just add <code>form-material</code> class to the form that's it.
                            </h6>
                            <section class="content">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-6">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">{{__('Product')}}</h3>
                                            </div>
                                            @foreach($setting as $setting)
                                                <a href="{{route('setting.edit',$setting->id)}}" class="btn btn-info btn-sm"><i class="fa fa-fw fa-edit"></i> </a>
                                        @endforeach
                                        <!-- /.box-header -->
                                            <div class="box-body">
                                                <ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">{{__('SEO Setting')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab2" aria-controls="1" role="tab" data-toggle="tab">{{__('Company Details')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab3" aria-controls="2" role="tab" data-toggle="tab">{{__('Mail Setting')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab4" aria-controls="3" role="tab" data-toggle="tab">{{__('Footer Setting')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab5" aria-controls="4" role="tab" data-toggle="tab">{{__('Access Setting')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab6" aria-controls="5" role="tab" data-toggle="tab">{{__('Terms Setting')}}</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#tab7" aria-controls="6" role="tab" data-toggle="tab">{{__('Google Setting')}}</a>
                                                    </li>
                                                </ul>
                                                <form method="post" action="{{route('setting.store')}}" id="myTabContent" class="tab-content setting-tab" enctype="multipart/form-data">
                                                    <div role="tabpanel"  class="tab-pane active" id="tab1" >
                                                        @csrf
                                                        <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Logo')}}</label>
                                                            <input type="file" class="form-control" id="exampleInputFile" placeholder="{{__('Logo')}}" name="logo">
                                                            {{--<div class="img-remove-logo">--}}
                                                            {{--@if($setting->logo)--}}
                                                            {{--<img height="50" width="50" src="{{ Storage::disk('public')->url('img/logo/' . $setting->logo) }}">--}}
                                                            {{--<i id="remove-logo-img" class="fa fa-times remove-logo" data-id="logo" aria-hidden="true"></i>--}}
                                                            {{--@endif--}}
                                                            {{--</div>--}}
                                                        </div>
                                                        <!--col-lg-10-->
                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Favicon')}}</label>
                                                            <input type="file" class="form-control" id="exampleInputFile" placeholder="{{__('Favicon')}}" name="favicon">
                                                            {{--<div class="img-remove-favicon">--}}
                                                            {{--@if($setting->favicon)--}}
                                                            {{--<img height="50" width="50" src="{{ Storage::disk('public')->url('img/favicon/' . $setting->favicon) }}">--}}
                                                            {{--<i id="remove-favicon-img" class="fa fa-times remove-logo" data-id="favicon" aria-hidden="true"></i>--}}
                                                            {{--@endif--}}
                                                            {{--</div>--}}
                                                        </div>
                                                        <!--col-lg-10-->
                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo Title')}}</label>
                                                                <input type="text" class="form-control" placeholder="{{__('Seo Title')}}" id="exampleInputFile" name="seo_title">
                                                            </div>
                                                            <!--col-lg-10-->
                                                        </div>
                                                        <!--form control-->

                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo keyword')}}</label>
                                                                <input type="text" class="form-control" placeholder="{{__('Seo keyword')}}" id="exampleInputFile" name="seo_keyword">
                                                            </div>
                                                        </div>

                                                        <!--form control-->
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">{{__('Seo Description')}}</label>
                                                                <input type="text" class="form-control" placeholder="{{__('Seo Description')}}" id="exampleInputFile" name="seo_description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                    <div role="tabpanel" class="tab-pane" id="tab2">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Company Contact')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Company Contact')}}" id="exampleInputFile" name="company_contact">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Company Address')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Company Address')}}" id="exampleInputFile" name="company_address">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab3">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('From Name')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('From Name')}}" id="exampleInputFile" name="from_name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('From Email')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('From Email')}}" id="exampleInputFile" name="from_email">
                                                        </div>
                                                        <!--form control-->
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab4">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Copyright Text')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Copyright Text')}}" id="exampleInputFile" name="copyright_text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Footer Text')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Footer Text')}}" id="exampleInputFile" name="footer_text">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab5">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Facebook')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Facebook')}}" id="exampleInputFile" name="facebook">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Linkedin')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Linkedin')}}" id="exampleInputFile" name="linkedin">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Twitter')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Twitter')}}" id="exampleInputFile" name="twitter">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Google')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Google')}}" id="exampleInputFile" name="google">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab6">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Terms')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Terms')}}" id="exampleInputFile" name="terms">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Disclaimer')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Disclaimer')}}" id="exampleInputFile" name="disclaimer">
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tab7">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">{{__('Google Analytics')}}</label>
                                                            <input type="text" class="form-control" placeholder="{{__('Google Analytics')}}" id="exampleInputFile" name="google_analytics">
                                                        </div>
                                                        <!--form control-->
                                                    </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
@endsection
@push('scripts')
@endpush