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
                            <form method="post" action="{{route('setting.update',$setting->id)}}" id="myTabContent" class="tab-content setting-tab" enctype="multipart/form-data">
                                <div role="tabpanel"  class="tab-pane active" id="tab1" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Logo')}}</label>
                                        <input type="file" class="form-control" id="exampleInputFile" name="logo" value="{{$setting->logo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Image Header')}}</label>
                                        <input type="file" class="form-control" id="exampleInputFile" name="hnt_setting_image_header" value="{{$setting->hnt_setting_image_header}}">
                                    </div>
                                    <!--col-lg-10-->
                                    <!--form control-->
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Favicon')}}</label>
                                        <input type="file" class="form-control" id="exampleInputFile" placeholder="{{__('Favicon')}}" name="favicon">
                                    </div>
                                    <!--col-lg-10-->
                                    <!--form control-->
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Seo Title')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Seo Title')}}" id="exampleInputFile" name="seo_title" value="{{$setting->seo_title}}">
                                        </div>
                                        <!--col-lg-10-->
                                    </div>
                                    <!--form control-->

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Seo keyword')}}</label>
                                            <input type="text" class="form-control" placeholder="{{__('Seo keyword')}}" id="exampleInputFile" name="seo_keyword" value="{{$setting->seo_keyword}}">
                                        </div>
                                    </div>

                                    <!--form control-->
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{__('Seo Description')}}</label>
                                            <input type="text" class="form-control"  id="exampleInputFile" name="seo_description" value="{{$setting->seo_description}}">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab2">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Company Contact')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="company_contact" value="{{$setting->company_contact}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Company Address')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="company_address" value="{{$setting->company_address}}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab3">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('From Name')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="from_name" value="{{$setting->from_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('From Email')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="from_email" value="{{$setting->from_email}}">
                                    </div>
                                    <!--form control-->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Copyright Text')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="copyright_text" value="{{$setting->copyright_text}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Footer Text')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="footer_text" value="{{$setting->footer_text}}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab5">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Facebook')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="facebook" value="{{$setting->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Linkedin')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="linkedin", value="{{$setting->linkedin}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Twitter')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="twitter" value="{{$setting->twitter}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Google')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="google" value="{{$setting->google}}">
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="tab6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Terms')}}</label>
                                        <input type="text" class="form-control" id="exampleInputFile" name="terms" value="{{$setting->terms}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Disclaimer')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="disclaimer" value="{{$setting->disclaimer}}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab7">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{__('Google Analytics')}}</label>
                                        <input type="text" class="form-control"  id="exampleInputFile" name="google_analytics" value="{{$setting->google_analytics}}">
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