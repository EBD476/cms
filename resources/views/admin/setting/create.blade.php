@extends('layouts.app')

@section('title',__('Setting'))

@push('css')

@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">{{__('Hover Data Table')}}</h3>
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
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@push('scripts')


@endpush