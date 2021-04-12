{{--@extends('layouts.app')--}}
{{--@section('title', __('Register'))--}}
{{--@section('bodyAttr', 'data-bg-src="'. media('misc/Ecom-Store-Owner-Sign-up-Background.png') .'"')--}}
{{--@section('bodyClass', 'signup_full bg_dark')--}}
{{--@section('headJS')--}}
{{--  @if (config('app.captcha_status') && config('app.captcha_type') == 'recaptcha')--}}
{{--  {!! htmlScriptTagJsApi() !!}--}}
{{--  @endif--}}
{{--@stop--}}
{{--@section('content')--}}
{{--<style>--}}
{{--  header,footer{--}}
{{--    display: none !important;--}}
{{--  }--}}
{{--  #content{--}}
{{--    height: initial;--}}
{{--  }--}}
{{--</style>--}}
{{--  <!-- Start form_signup_onek -->--}}
{{--  <section class="form_signup_one signup_two mt-8">--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div class="col-lg-5 offset-1 my-auto">--}}

{{--          <div class="item_brand margin-b-3">--}}
{{--            <a href="{{ url('/') }}">--}}
{{--              <img class="mr-2 w-70px" src="{{ logo() }}" alt="">--}}
{{--              <span hidden>{{ config('app.name') }}.</span>--}}
{{--            </a>--}}
{{--          </div>--}}

{{--          <div class="title_sections margin-b-5">--}}
{{--            <h2 class="c-white mb-1">{{ __('Sign up') }}</h2>--}}
{{--            <p class="c-white">{{ __('Have an account?') }} <a href="{{ route('login') }}" class="c-blue">{{ __('Login') }}</a></p>--}}
{{--          </div>--}}

{{--          <div class="list__point">--}}
{{--            <div class="item media">--}}
{{--              <div class="icob">--}}
{{--                <i class="tio account_circle"></i>--}}
{{--              </div>--}}
{{--              <div class="media-body my-auto">--}}
{{--                <p>{{ __('Create an account for free') }}</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="item media">--}}
{{--              <div class="icob">--}}
{{--                <i class="tio explore_outlined"></i>--}}
{{--              </div>--}}
{{--              <div class="media-body my-auto">--}}
{{--                <p>{{ __('Set up your store and start sharing') }}</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="item media">--}}
{{--              <div class="icob">--}}
{{--                <i class="tio call_talking"></i>--}}
{{--              </div>--}}
{{--              <div class="media-body my-auto">--}}
{{--                <p>{{ __('Get 24/7 support') }}</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--        <div class="col-md-7 col-lg-5 ml-lg-auto">--}}
{{--          <div class="item_group">--}}

{{--         <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}
{{--              <div class="row">--}}
{{--                <div class="col">--}}
{{--                  <div class="form-group custom">--}}
{{--                       <input class="form-control form-control-lg @error('first_name') is-invalid @enderror" type="text" placeholder="{{ __('First Name') }}" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus/>--}}
{{--                     @error('first_name')--}}
{{--                         <span class="invalid-feedback" role="alert">--}}
{{--                             <strong>{{ $message }}</strong>--}}
{{--                         </span>--}}
{{--                     @enderror--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                  <div class="form-group custom">--}}
{{--                       <input class="form-control form-control-lg @error('last_name') is-invalid @enderror" type="text" placeholder="{{ __('Last Name') }}" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus/>--}}
{{--                     @error('last_name')--}}
{{--                         <span class="invalid-feedback" role="alert">--}}
{{--                             <strong>{{ $message }}</strong>--}}
{{--                         </span>--}}
{{--                     @enderror--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                  <div class="form-group custom">--}}
{{--                       <input id="username_email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" name="email" value="{{ !empty(old('email')) ? old('email') : request()->get('email') }}" autocomplete="email"/>--}}
{{--                     @error('email')--}}
{{--                         <span class="invalid-feedback" role="alert">--}}
{{--                             <strong>{{ $message }}</strong>--}}
{{--                         </span>--}}
{{--                     @enderror--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="form-group custom">--}}
{{--                   <input id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" placeholder="{{ __('Username') }}" name="username" value="{{ old('username') }}" autocomplete="username"/>--}}
{{--                 @error('username')--}}
{{--                     <span class="invalid-feedback" role="alert">--}}
{{--                         <strong>{{ $message }}</strong>--}}
{{--                     </span>--}}
{{--                 @enderror--}}
{{--              </div>--}}
{{--              <div class="row">--}}
{{--                <div class="col">--}}
{{--                  <div class="form-group custom">--}}
{{--                      <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" value="{{ old('password') }}" />--}}
{{--                    @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}

{{--                            <small class="d-block mt-3">{{ __('Note') }} : {{ __('Password must contain at least one lowercase letter, one uppercase letter and a special character') }}</small>--}}
{{--                        </span>--}}
{{--                    @enderror--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                  <div class="form-group custom">--}}
{{--                      <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" autocomplete="new-password" class="form-control form-control-lg" />--}}
{{--                  </div>--}}

{{--                  @error('password')--}}
{{--                      <span class="invalid-feedback" role="alert">--}}
{{--                          <strong>{{ $message }}</strong>--}}
{{--                      </span>--}}
{{--                  @enderror--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              @if (!empty($website->privacy) || !empty($website->terms))--}}
{{--              <div class="col-12 p-0 mb-2 mt-3">--}}
{{--                <div class="form-group">--}}
{{--                  <div class="custom-control custom-control-xs custom-checkbox">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="checkbox" required="">--}}
{{--                      <label class="custom-control-label" for="checkbox">{{ __('I agree to ') }}<b>{{env("APP_HOME") }}</b> {!! clean((!empty($website->privacy) ? '<a href="' . url($website->privacy) . '">'.__('Privacy Policy').'</a>' : "") . (!empty($website->privacy) && !empty($website->terms) ? ' &amp; ' : "") .(!empty($website->terms) ? '<a href="' . url($website->terms) . '">'.__('Terms').'</a>' : ""), 'titles') . ' ' . __('of this site') !!}--}}
{{--                    </label>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              @endif--}}
{{--              @if (config('app.captcha_status') && config('app.captcha_type') == 'recaptcha')--}}
{{--               {!! htmlFormSnippet() !!}--}}
{{--               @endif--}}
{{--               @if (config('app.captcha_status') && config('app.captcha_type') == 'default')--}}
{{--               <div class="row mt-3 mb-4">--}}
{{--                 <div class="col-md-6 mb-4 mb-md-0">--}}
{{--                   <div class="bdrs-20 p-2 text-center card-shadow">--}}
{{--                       {!! captcha_img() !!}--}}
{{--                   </div>--}}
{{--                 </div>--}}
{{--                 <div class="col-md-6">--}}
{{--                   <div class="form-group">--}}
{{--                       <input type="text" class="form-control form-control-lg @error('captcha') is-invalid @enderror" placeholder="{{ __('Captcha') }}" name="captcha">--}}
{{--                   </div>--}}
{{--                 </div>--}}
{{--               </div>--}}
{{--               @endif--}}
{{--              <div class="col-12">--}}
{{--                <button class="btn w-100 margin-t-3 btn_account bg-orange-red c-white rounded-8">--}}
{{--                  {{ __('Register') }}--}}
{{--                </button>--}}
{{--              </div>--}}
{{--              <div class="col-12">--}}
{{--                <div class="google_sign margin-t-3">--}}
{{--                  @if (config('app.facebook_status') == 1 || config('app.google_status') == 1)--}}
{{--                  <p class="text-center font-s-13 c-gray margin-b-3">{{ __('Or Sign in with socials') }}</p>--}}
{{--                  @endif--}}
{{--                    @if (config('app.google_status') == 1)--}}
{{--                  <a href="{{ route('user-auth-google') }}" class="btn btn_social rounded-8 mb-3 d-flex align-items-center justify-content-center">--}}
{{--                    <i class="tio google"></i>--}}
{{--                    {{ __('Continue with Google') }}--}}
{{--                  </a>--}}
{{--                  @endif--}}

{{--                    @if (config('app.facebook_status') == 1)--}}
{{--                    <a href="{{ route('user-auth-facebook') }}" class="btn btn_social rounded-8 bg-blue c-white d-flex align-items-center justify-content-center">--}}
{{--                      <i class="tio facebook_square"></i>--}}
{{--                      {{ __('Continue with Facebook') }}--}}
{{--                    </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--              </div>--}}
{{--           </form>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--      </div>--}}

{{--    </div>--}}
{{--  </section>--}}
{{--  <!-- End.form_signup_one -->--}}

{{--  <!-- Start item_footer -->--}}
{{--  <div class="item_footer">--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div class="col-lg-5 offset-lg-1">--}}
{{--          <p>© {{ date('Y') }} <a href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a> {{ __('All Right Reseved') }}--}}
{{--          </p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <!-- End. item_footer -->--}}

{{--@endsection--}}
<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend/dist/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Register - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css')}}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="{{ url('/') }}" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ logo() }}">
                <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ url('backend/dist/images/illustration.svg')}}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign up to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <form method="POST" action="{{ route('register') }}">
              @csrf

            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign Up
                </h2>
                <div class="intro-x mt-2 text-gray-500 dark:text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                <div class="intro-x mt-8">
                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block @error('first_name') is-invalid @enderror " placeholder="{{ __('First Name') }}" name="first_name" value="{{ old('first_name') }}" autofocus />
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4 @error('last_name') is-invalid @enderror" placeholder="{{ __('last Name') }}" name="last_name" value="{{ old('last_name') }}" autofocus />
                    @error('last_name')

                             <strong>{{ $message }}</strong>

                    @enderror
                    <input type="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4 @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" name="email" value="{{ !empty(old('email')) ? old('email') : request()->get('email') }}" autocomplete="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                    @enderror


                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4 @error('username') is-invalid @enderror "placeholder="{{ __('Username') }}" name="username" value="{{ old('username') }}" autocomplete="username"/>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                    <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4 @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" value="{{ old('password') }}" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>

                            <small class="d-block mt-3">{{ __('Note') }} : {{ __('Password must contain at least one lowercase letter, one uppercase letter and a special character') }}</small>
                        </span>
                    @enderror

                    <input  id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" autocomplete="new-password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>

                            <small class="d-block mt-3">{{ __('Note') }} : {{ __('Password must contain at least one lowercase letter, one uppercase letter and a special character') }}</small>
                        </span>
                    @enderror

                    <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>
                    </div>
{{--                    <a href="" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">What is a secure password?</a>--}}
{{--                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation">--}}
                </div>
                <div class="intro-x flex items-center text-gray-700 dark:text-gray-600 mt-4 text-xs sm:text-sm">
                    <input type="checkbox" class="input border mr-2" id="remember-me">
                    <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                    <a class="text-theme-1 dark:text-theme-10 ml-1" href="">Privacy Policy</a>.
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top">Register</button>
                    <a href="{{ route('login') }}" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top">Sign in</a>
                </div>
            </div>
            </form>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="login-dark-register.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="{{ asset('backend/dist/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>
</html>