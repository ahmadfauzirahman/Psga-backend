@extends('layouts.app')

@section('login')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <style>
        .bard {
            font-family: Nunito;
        }
    </style>
    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <header class="d-flex justify-content-between align-items-center">
            <a class="d-flex auth-brand" href="#">
                <h1 class="brand-img text-white bard"><strong>PSGA</strong></h1>
            </a>
            <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-outline-secondary">Help</a>
                <a href="#" class="btn btn-outline-secondary">About Us</a>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 pa-0">
                    <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                        <div class="fadeOut item auth-cover-img overlay-wrap"
                             style="background-image:url({{asset('public/img/parents.jpg')}});">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="display-3 text-white mb-20">Understand and look deep into
                                        nature.</h1>
                                    <p class="text-white">A B C D E F G H I J K L M N O P Q R S T U V W Y X Z.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                        <div class="fadeOut item auth-cover-img overlay-wrap"
                             style="background-image:url({{asset('public/img/homepgae_child2.jpg')}});">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="display-3 text-white mb-20">Experience matters for good
                                        applications.</h1>
                                    <p class="text-white">A B C D E F G H I J K L M N O P Q R S T U V W Y X Z.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h1 class="display-4 mb-10">Welcome Back :)</h1>
                                <p class="mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('E-Mail Address') }}" name="email"
                                           value="{{ old('email') }}" type="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               placeholder="{{ __('Password') }}" name="password"
                                               required type="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" name="remember" id="remember"
                                           {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                    <label class="custom-control-label font-14"
                                           for="same-address"> {{ __('Remember Me') }}</label>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                                <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->
@endsection
