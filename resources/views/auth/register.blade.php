@extends('layouts.app')

@section('login')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <style>
        .bard {
            font-family: Nunito;
        }
    </style>
    <div class="hk-wrapper">

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
                        <div class="auth-cover-img overlay-wrap"
                             style="background-image:url({{asset('public/img/parents.jpg')}});">

                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                    <h1 class="display-3 text-white mb-20">LPPM UIN SUSKA</h1>
                                    <p class="text-white">A B C D E F G H I J K L M N O P Q R S T U V W Y X Z.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h1 class="display-4 mb-10">Sign up for free</h1>
                                    <div class="form-row">
                                        <div class="col-md-12 form-group">
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" placeholder="Nama Anda" value="{{ old('name') }}"
                                                   required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" placeholder="Email Anda" value="{{ old('email') }}"
                                               required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation"
                                               placeholder="{{ __('Confirm Password') }}" required>

                                    </div>
                                    <button class="btn btn-primary btn-block"
                                            type="submit">{{ __('Register') }}</button>

                                    <p class="text-center">Already have an account? <a href="{{route('login')}}">Sign
                                            In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
@endsection
