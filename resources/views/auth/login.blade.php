@extends('layouts_frontend.app')
@section('title',__('Login'))
@push('css')
@endpush
@section('content')
    <body class="index-page sidebar-collapse">
    <div class="section section-signup">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="orange">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">login</h3>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fab fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                                </div>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required >
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                                </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block">ورود</button>                            </div>
                    </form>
                </div>
            </div>
            <div class="col text-center">
                <a href="{{route('welcome')}}" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">{{__('Back')}}</a>
            </div>
        </div>
    </div>?</body>
@endsection
@push('scripts')
@endpush