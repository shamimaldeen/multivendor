{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>@yield('title') - {{ config('app.name') }}</title>--}}

{{--    @if(!empty(settings('favicon')))--}}
{{--        <link href="{{ favicon() }}" rel="shortcut icon" type="image/png" />--}}
{{--    @endif--}}
{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    @foreach(['bootstrap.min.css', 'animate.css', 'swiper.min.css', 'icons.css', 'aos.css', 'main.css', 'normalize.css', 'ecom.css', 'classic.min.css'] as $file)--}}
{{--    <link href="{{ asset('assets/css/' . $file . '?v=' . env('APP_VERSION')) }}" rel="stylesheet">--}}
{{--    @endforeach--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('js/pickr.es5.min.js') }}"></script>--}}
{{--    @yield('headJS')--}}
{{--    @if (settings('custom_code.enabled'))--}}
{{--      {!! settings('custom_code.head') !!}--}}
{{--    @endif--}}
{{--</head>--}}
{{--<body class="{{ request()->path() !== '/' && request()->path() !== 'pricing' ? 'dashboard-body' : 'index-body bg-white' }} @yield('bodyClass')" id="body" @yield('bodyAttr')>--}}
{{--   @if (session()->get('admin_overhead') && user('role') == 0)--}}
{{--    <div class="topbar admin-bar">--}}
{{--            <div class="d-flex align-items-center w-50">--}}
{{--              <h6 class="mr-4 text-white mb-0">{{ __('Admin') }}</h6>--}}
{{--              <form action="{{ route('admin-login-user') }}" method="post" class="d-flex w-100">--}}
{{--                @csrf--}}
{{--                <input type="hidden" name="id" value="{{ user('id') }}">--}}
{{--                <select name="loginasuser" class="form-select" data-search="off" data-ui="sm">--}}
{{--                  @foreach (\App\User::get() as $item)--}}
{{--                    <option value="{{$item->id}}" {{ user('id') == $item->id ? 'selected' : '' }}>{{ $item->username }}</option>--}}
{{--                  @endforeach--}}
{{--                </select>--}}
{{--                <button class="text-white bg-transparent border-0 ml-3">{{ __('Login') }}</button>--}}
{{--              </form>--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--               <form method="post" action="{{ url('logout') }}">--}}
{{--                 @csrf--}}
{{--                 <input type="hidden" name="returnAdmin" value="nothing here">--}}
{{--                  <button class="btn text-white"><em class="icon ni ni-signout"></em></button>--}}
{{--              </form>--}}
{{--            </div>--}}
{{--    </div>--}}
{{--    @endif--}}
{{--    <!-- Static navbar -->--}}

{{--  <div id="wrapper" class="{{ request()->path() !== '/' && request()->path() !== 'pricing' ? '' : 'p-lg-0' }}">--}}
{{--    <div id="content">--}}
{{--      <!-- Start header -->--}}
{{--      <header class="header-nav-center active-blue" id="OverallHeader">--}}
{{--        <div class="container">--}}
{{--          <!-- navbar -->--}}
{{--          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--              <img class="w-80px" src="{{ logo() }}" alt="logo" />--}}
{{--            </a>--}}
{{--            <div>--}}

{{--              <button class="navbar-toggler menu ripplemenu d-lg-none" type="button" data-toggle="collapse"--}}
{{--                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--                <i class="tio menu_left_right mt-2"></i>--}}
{{--              </button>--}}

{{--              @auth--}}
{{--              <button class="navbar-toggler menu ripplemenu toggle-sidebar" type="button">--}}
{{--                <svg viewBox="0 0 64 48">--}}
{{--                  <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>--}}
{{--                  <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>--}}
{{--                  <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>--}}
{{--                </svg>--}}
{{--              </button>--}}
{{--              <a href="button" data-toggle="modal" data-target="#mdllauth" class="p-0 opacity-1 sweep_letter scale sweep_top user-avatar-text bg-blue d-lg-none ml-3">--}}
{{--                <div class="inside_item">--}}
{{--                  <span data-hover="😊">{{ mb_substr(full_name($user->id), 0, 2) }}</span>--}}
{{--                </div>--}}
{{--              </a>--}}

{{--              @else--}}
{{--                <a href="#" class="btn btn-default sign-in-modal mt-2 fs-12px bg-blue c-white d-lg-none">{{ __('Sign in') }}</a>--}}
{{--              @endauth--}}
{{--            </div>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--              <ul class="navbar-nav mx-auto nav-pills">--}}
{{--                <li class="nav-item">--}}
{{--                  <a class="nav-link" href="{{ url('/#how-it-work') }}">{{ __('How it works') }}</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                  <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown dropdown-hover">--}}
{{--                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"--}}
{{--                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    {{ __('Pages') }}--}}

{{--                    <div class="icon_arrow">--}}
{{--                      <i class="tio chevron_right"></i>--}}
{{--                    </div>--}}
{{--                  </a>--}}

{{--                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">--}}
{{--                    <ul class="dropdown_menu_nav">--}}
{{--                      <li><a class="dropdown-item" href="{{ route('all-pages') }}">{{ __('All pages') }}</a></li>--}}
{{--                      @foreach ($allPages as $item)--}}
{{--                      <li><a class="dropdown-item" href="{{$item->type == 'internal' ? url('page/' . $item->url) : $item->url}}" target="{{ $item->type == 'internal' ? '_self' : '_blank' }}">{{ ucfirst($item->title) }}</a></li>--}}
{{--                      @endforeach--}}

{{--                    </ul>--}}

{{--                  </div>--}}
{{--                </li>--}}

{{--              </ul>--}}

{{--              <div class="nav_account btn_demo3">--}}
{{--                @auth--}}
{{--                <div>--}}
{{--                  <button type="button" data-toggle="modal" data-target="#mdllauth" class="btn btn_sm_primary opacity-1 sweep_letter scale sweep_top rounded-8">--}}
{{--                    <div class="inside_item">--}}
{{--                      <span data-hover="Hello !">{{ __('My account') }}</span>--}}
{{--                    </div>--}}
{{--                  </button>--}}
{{--                </div>--}}
{{--                @else--}}
{{--                <a href="Javascript::void" class="btn btn-default sign-in-modal">{{ __('Sign in') }}</a>--}}
{{--                <a href="{{ route('register') }}" class="btn scale btn_sm_primary bg-blue c-white effect-letter rounded-8">--}}
{{--                  {{ __('Sign up') }}--}}
{{--                </a>--}}
{{--                @endauth--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </nav>--}}
{{--          <!-- End Navbar -->--}}
{{--        </div>--}}
{{--        <!-- end container -->--}}
{{--      </header>--}}
{{--      <!-- End header -->--}}

{{--     @if (Auth::check() && !package('settings.ads') && settings('ads.enabled'))--}}
{{--       <div class="mt-8">{!! settings('ads.site_header') !!}</div>--}}
{{--     @endif--}}
{{--      @yield('content')--}}
{{--     @if (Auth::check() && !package('settings.ads') && settings('ads.enabled'))--}}
{{--       {!! settings('ads.site_footer') !!}--}}
{{--     @endif--}}

{{--    </div>--}}
{{--    <!-- [id] content -->--}}

{{--    @auth--}}
{{--    <!-- Auth Modal  -->--}}
{{--    <div class="modal mdllaccount fade" id="mdllauth" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--      <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--          <div class="modal-header">--}}
{{--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--              <i class="tio clear"></i>--}}
{{--            </button>--}}
{{--          </div>--}}
{{--          <div class="modal-body">--}}
{{--            <div class="form_account">--}}
{{--              <div class="head_account">--}}
{{--                <div class="img_profile">--}}
{{--                  <img src="{{ avatar() }}" />--}}
{{--                </div>--}}
{{--                <div class="title">--}}
{{--                  <h4>{{ __('Hey') }}, {{user('name.first_name')}}</h4>--}}
{{--                  <div class="user-balance">{{ __('You are on') }} <b>{{$package->name}}</b> {{ __('Plan') }}</div>--}}
{{--                  <div class="row justify-content-center text-center">--}}
{{--                    <div class="Countdown-timer">--}}
{{--                      <div countdown data-date="{{ Carbon\Carbon::parse($user->package_due)->toFormattedDateString() }}">--}}
{{--                        <div class="item">--}}
{{--                          <span class="fs-20px" data-days>{{ (strtolower($package->name) == 'free' ? __('Forever') : __('Forever')) }}</span>--}}
{{--                          <p class="fs-9px">{{ __('days to expiry') }}</p>--}}
{{--                        </div>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <a href="{{ route('pricing') }}"><span>{{ __('Change Plan') }}</span></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="form-row">--}}
{{--                <div class="col-12">--}}

{{--                                            <ul class="link-list p-0">--}}
{{--                                                @if ($user->role == 1)--}}
{{--                                                <li><a href="{{ route('admin-home') }}" target="_blank"><em class="icon tio protection"></em><span>{{ __('Admin') }}</span></a></li>--}}
{{--                                                @endif--}}
{{--                                                <li><a href="{{ url($profile_url) }}" target="_blank"><em class="icon tio shop_outlined"></em><span>{{ __('View Store') }}</span></a></li>--}}

{{--                                                <li><a href="{{ route('user-settings') }}"><em class="icon tio settings_vs_outlined"></em><span>{{ __('Settings') }}</span></a></li>--}}

{{--                                                <li><a href="{{ route('user-transactions') }}"><em class="icon tio money_vs"></em><span>{{ __('Transactions') }}</span></a></li>--}}

{{--                                                <li><a href="{{ route('user-faq') }}"><em class="icon tio new_message"></em><span>{{ __('Faq') }}</span></a></li>--}}

{{--                                                <li><a href="{{ route('user-activities') }}"><em class="icon tio chat_outlined"></em><span>{{ __('Login activity') }}</span></a></li>--}}

{{--                                               <form method="post" action="{{ url('logout') }}">--}}
{{--                                                 @csrf--}}
{{--                                                 <input type="hidden" name="returnAdmin" value="nothing here">--}}
{{--                                                 <li><button class="btn btn_sm_primary btn-secondary btn-block" href="{{ route('user-activities') }}"><em class="icon tio sign_out"></em><span>{{ __('Logout') }}</span></button></li>--}}
{{--                                              </form>--}}
{{--                                            </ul>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <!-- End. Modal -->--}}
{{--  @endauth--}}

{{--    <!-- Form Create account -->--}}
{{--  <div class="boxup-auth">--}}
{{--    <div class="overlay hide"></div>--}}
{{--    <div class="box--signup translat" id="animate1">--}}
{{--      <div class="cotainer">--}}
{{--        <div class="links--account">--}}
{{--          <ul class="nav nav-pills" id="pills-tab" role="tablist">--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="{{ route('login') }}" role="tab"--}}
{{--                aria-controls="pills-login" aria-selected="true">{{ __('Sign in') }}</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link active" href="{{ route('register') }}">{{ __('Get Started') }}</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--        <div class="title">--}}
{{--          {{ __('Sign in to') }} {{ config('app.name') }}.--}}
{{--        </div>--}}
{{--        <div class="other_login">--}}

{{--          @if (config('app.google_status') == 1)--}}
{{--          <a href="{{ route('user-auth-google') }}" class="btn scale btn-loin-google">--}}
{{--            <i class="tio google"></i>--}}
{{--            {{ __('Sign up with Google') }}--}}
{{--          </a>--}}
{{--          @endif--}}

{{--          @if (config('app.facebook_status') == 1)--}}
{{--            <a href="{{ route('user-auth-facebook') }}" class="btn scale btn_facebook bg-blue c-white">--}}
{{--              <i class="tio facebook_square"></i>--}}
{{--            </a>--}}
{{--          @endif--}}

{{--          @if (config('app.facebook_status') == 1 || config('app.google_status') == 1)--}}
{{--          <div class="line-or">--}}
{{--            <span class="or">{{ __('or') }}</span>--}}
{{--          </div>--}}
{{--          @endif--}}
{{--        </div>--}}
{{--            <div class="form-row">--}}
{{--              <div class="col-12">--}}

{{--                     <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}
{{--                          <div class="form-group custom">--}}
{{--                             <label>{{ __('Email / Username') }}</label>--}}
{{--                             <input type="text" class="form-control form-control-lg @error('user') is-invalid @enderror" id="default-01" placeholder="{{ __('Enter your email address or username') }}" name="user" value="{{ old('username') }}" autocomplete="user">--}}
{{--                          </div>--}}
{{--                          @error('user')--}}
{{--                              <span class="invalid-feedback" role="alert">--}}
{{--                                  <strong>{{ $message }}</strong>--}}
{{--                              </span>--}}
{{--                          @enderror--}}
{{--                          <div class="form-group custom">--}}
{{--                            <div class="row">--}}
{{--                              <div class="col-6">--}}
{{--                                <label>{{ __('Password') }}</label>--}}
{{--                              </div>--}}
{{--                              <div class="col-6">--}}
{{--                               <div class="form-label-group d-flex justify-content-end">--}}
{{--                                <a class="link link-primary link-sm ml-auto fs-14px" href="{{ route('resetpassword') }}">{{ __('Forgot Password?') }}</a>--}}
{{--                               </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                             <div class="form-control-wrap">--}}
{{--                              <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">--}}
{{--                                <em class="passcode-icon icon-show icon ni ni-eye"></em>--}}
{{--                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>--}}
{{--                             </a>--}}
{{--                              <input type="password" class="form-control form-control-lg pl-4 @error('password') is-invalid @enderror" id="password" placeholder="{{ __('Enter your password') }}" name="password" autocomplete="current-password">--}}
{{--                            </div>--}}
{{--                          </div>--}}

{{--                          @error('password')--}}
{{--                              <span class="invalid-feedback" role="alert">--}}
{{--                                  <strong>{{ $message }}</strong>--}}
{{--                              </span>--}}
{{--                          @enderror--}}
{{--                          <div class="custom-control custom-control-alternative custom-checkbox">--}}
{{--                              <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                             <label class="custom-control-label" for="remember"><span class="text-muted">{{ __('Remember me') }}</span></label>--}}
{{--                          </div>--}}
{{--                          @if (config('app.captcha_status') && config('app.captcha_type') == 'recaptcha')--}}
{{--                          {!! htmlFormSnippet() !!}--}}
{{--                          @endif--}}
{{--                          @if (config('app.captcha_status') && config('app.captcha_type') == 'default')--}}
{{--                          <div class="row mt-3 mb-4">--}}
{{--                            <div class="col-md-6 mb-4 mb-md-0">--}}
{{--                              <div class="bdrs-20 p-2 text-center card-shadow">--}}
{{--                                 {!! captcha_img() !!}--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                              <div class="form-group">--}}
{{--                                 <input type="text" class="form-control form-control-lg @error('captcha') is-invalid @enderror" placeholder="{{ __('Captcha') }}" name="captcha">--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                          @endif--}}
{{--                          <div class="form-group">--}}
{{--                            <button type="submit" class="btn mt-3 rounded-8 c-white btn_md_primary effect-letter bg-blue">{{ __('Login') }}</button>--}}
{{--                          </div>--}}
{{--                       </form>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <!-- footr -->--}}
{{--    <footer class="defalut-footer foot_demo3 light margin-t-12 padding-py-8">--}}
{{--      <div class="container">--}}

{{--        <div class="row">--}}
{{--          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">--}}
{{--            <div class="item_about">--}}
{{--              <a class="logo" href="{{ url('/') }}">--}}
{{--                <img class="w-80px" src="{{ logo() }}" alt="" />--}}
{{--              </a>--}}
{{--              <p>--}}
{{--                {{ __('Own a simple and elegant storefront with us today.') }}--}}
{{--              </p>--}}
{{--              <div class="address">--}}
{{--                <span>{{settings('location')}}</span>--}}
{{--                <span>{{ __('Email us:') }} <a href="mailto:{{settings('email')}}">{{settings('email')}}</a></span>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-6 col-md-6 col-lg-2 parent-link">--}}
{{--            <div class="item_links social">--}}
{{--              <h4>{{ __('Social') }}</h4>--}}
{{--              @if (!empty(settings('social.facebook')))--}}
{{--              <a class="nav-link" href="{{(!empty(settings('social.facebook')) ? url('https://facebook.com/' . settings('social.facebook')) : "")}}">{{ __('Facebook') }}</a>--}}
{{--              @endif--}}
{{--              @if (!empty(settings('social.whatsapp')))--}}
{{--              <a class="nav-link" href="{{(!empty(settings('social.whatsapp')) ? url('https://wa.me/' . settings('social.whatsapp')) : "")}}">{{ __('Whatsapp') }}</a>--}}
{{--              @endif--}}
{{--              @if (!empty(settings('social.twitter')))--}}
{{--              <a class="nav-link" href="{{(!empty(settings('social.twitter')) ? url('https://twitter.com/' . settings('social.twitter')) : "")}}">{{ __('Twitter') }}</a>--}}
{{--              @endif--}}
{{--              @if (!empty(settings('social.instagram')))--}}
{{--              <a class="nav-link" href="{{(!empty(settings('social.instagram')) ? url('https://instagram.com/' . settings('social.instagram')) : "")}}">{{ __('Instagram') }}</a>--}}
{{--              @endif--}}
{{--              @if (!empty(settings('social.youtube')))--}}
{{--              <a class="nav-link" href="{{(!empty(settings('social.youtube')) ? url('https://youtube.com/channel/' . settings('social.youtube')) : "")}}">{{ __('Youtube') }}</a>--}}
{{--              @endif--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-6 col-md-6 col-lg-2 parent-link">--}}
{{--            <div class="item_links social">--}}
{{--              <h4>{{ __('Pages') }}</h4>--}}
{{--               @foreach ($allPages as $item)--}}
{{--                <a class="nav-link" href="{{$item->type == 'internal' ? url('page/' . $item->url) : $item->url}}" target="{{ $item->type == 'internal' ? '_self' : '_blank' }}">{{ ($item->title) }}</a>--}}
{{--              @endforeach--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">--}}
{{--            <div class="item_subscribe">--}}
{{--              <h4>{{ __('Get started') }}</h4>--}}
{{--              <p>{{ __('Check out our simple pricing') }}</p>--}}
{{--              <a href="{{ route('pricing') }}" class="btn btn_sm_primary bg-blue mt-3">{{ __('Pricing') }}</a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="row" hidden>--}}
{{--          <div class="col-md-6 margin-t-1">--}}
{{--            <select data-menu>--}}
{{--              <option>French</option>--}}
{{--              <option selected>English</option>--}}
{{--              <option>Arabic</option>--}}
{{--              <option>Russian</option>--}}
{{--            </select>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 text-center padding-t-4">--}}
{{--          <div class="copyright">--}}
{{--              <span>© {{ date('Y') }} <a href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a> {{ __('All Right Reseved') }} </span>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </footer>--}}
{{--    <!-- End. -->--}}

{{--    <!-- Back to top with progress indicator-->--}}
{{--    <div class="prgoress_indicator">--}}
{{--      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">--}}
{{--        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />--}}
{{--      </svg>--}}
{{--    </div>--}}



{{--    <!-- Start Section Loader -->--}}
{{--    <section class="loading_overlay" hidden>--}}
{{--      <div class="loader_logo">--}}
{{--        <img class="logo" src="{{ logo() }}" />--}}
{{--      </div>--}}
{{--    </section>--}}
{{--    <!-- End. Loader -->--}}
{{--  </div>--}}
{{--  <!-- End. wrapper -->--}}

{{--    <!-- Tosts -->--}}
{{--    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">--}}
{{--      <div class="toast" id="cookie-toast" role="alert" aria-live="assertive" aria-atomic="true"--}}
{{--        data-animation="true" data-autohide="false">--}}
{{--        <div class="toast-body">--}}
{{--          <button type="button" id="cookie-deny-button" class="ml-2 mb-1 close">--}}
{{--            <i class="tio clear"></i>--}}
{{--          </button>--}}
{{--          <h5>{{ __('Do you like cookies? 🍪') }}</h5>--}}
{{--          <p>{{ __('We use cookies to ensure you get the best experience on our website') }}</p>--}}
{{--          <button id="cookie-accept-button" class="btn effect-letter c-white bg-blue">{{ __('I agree') }}</button>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <!-- End. Toasts -->--}}

{{--    <!-- End. Toasts -->--}}
{{--    @include('includes.toast')--}}
{{--      <!-- END FOOTER -->--}}
{{--      @yield('footerJS')--}}
{{--      <!-- jquery-migrate -->--}}
{{--      <script src="{{ url('assets/js/jquery-migrate.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- popper -->--}}
{{--      <!----}}
{{--      ============--}}
{{--      vendor file--}}
{{--      ============--}}
{{--       -->--}}
{{--      <!-- particles -->--}}
{{--      <script src="{{ url('assets/js/vendor/particles.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- TweenMax -->--}}
{{--      <script src="{{ url('assets/js/vendor/TweenMax.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- ScrollMagic -->--}}
{{--      <script src="{{ url('assets/js/vendor/ScrollMagic.js') }}" type="text/javascript"></script>--}}
{{--      <!-- animation.gsap -->--}}
{{--      <script src="{{ url('assets/js/vendor/animation.gsap.js') }}" type="text/javascript"></script>--}}
{{--      <!-- addIndicators -->--}}
{{--      <script src="{{ url('assets/js/vendor/debug.addIndicators.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- Swiper js -->--}}
{{--      <script src="{{ url('assets/js/vendor/swiper.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- countdown -->--}}
{{--      <script src="{{ url('assets/js/vendor/countdown.js') }}" type="text/javascript"></script>--}}
{{--      <!-- simpleParallax -->--}}
{{--      <script src="{{ url('assets/js/vendor/simpleParallax.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- waypoints -->--}}
{{--      <script src="{{ url('assets/js/vendor/waypoints.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- counterup -->--}}
{{--      <script src="{{ url('assets/js/vendor/jquery.counterup.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- charming -->--}}
{{--      <script src="{{ url('assets/js/vendor/charming.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- imagesloaded -->--}}
{{--      <script src="{{ url('assets/js/vendor/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- BX-Slider -->--}}
{{--      <script src="{{ url('assets/js/vendor/jquery.bxslider.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- Sharer -->--}}
{{--      <script src="{{ url('assets/js/vendor/sharer.js') }}" type="text/javascript"></script>--}}
{{--      <!-- sticky -->--}}
{{--      <script src="{{ url('assets/js/vendor/sticky.min.js') }}" type="text/javascript"></script>--}}
{{--      <!-- Aos -->--}}
{{--      <script src="{{ url('assets/js/vendor/aos.js') }}" type="text/javascript"></script>--}}
{{--      <!-- main file -->--}}
{{--      <script src="{{ url('assets/js/main.js') }}" type="text/javascript"></script>--}}
{{--      <script src="{{ url('assets/js/html2canvas.min.js') }}" type="text/javascript"></script>--}}

{{--      @foreach(['custom.js'] as $file)--}}
{{--      <script src="{{ asset('js/' .$file. '?v=' . env('APP_VERSION')) }}"></script>--}}
{{--      @endforeach--}}
{{--      @yield('footerJS-down')--}}
{{--</body>--}}
{{--</html>--}}

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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css')}}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app" class="{{ request()->path() !== '/' && request()->path() !== 'pricing' ? 'dashboard-body' : 'index-body bg-white' }} @yield('bodyClass')" id="body" @yield('bodyAttr')>

<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ url('backend/dist/images/logo.svg')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="index.html" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Side Menu </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Simple Menu </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Top Menu </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-light-inbox.html" class="menu">
                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="menu__title"> Inbox </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-file-manager.html" class="menu">
                <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="menu">
                <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="menu">
                <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Post </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="edit"></i> </div>
                <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Data List </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Form </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Layout 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Layout 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Layout 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="trello"></i> </div>
                <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="layout"></i> </div>
                <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Login </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Register </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Error Page </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Grid <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="menu">
                                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Accordion </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Button </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-modal.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Modal </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Alert </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Progress Bar </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Tooltip </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Dropdown </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-toast.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Toast </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Typography </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Icon </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Loading Icon </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Regular Form </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Datepicker </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tail-select.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Tail Select </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> File Upload </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wysiwyg Editor </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Validation </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Chart </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Slider </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Image Zoom </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
   @if (Auth::check() && request()->path() !== '/' && request()->path() !== 'pricing')
    <nav class="side-nav">
        <a href="{{ url('/') }}" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ logo() }}">
            <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="{{ route('user-dashboard') }}" class="side-menu side-menu--active">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title"> {{ __('Dashbord') }} </div>
                </a>

                @if ($user->role == 1)
                    <a href="{{ route('admin-home') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="users"></i>  {{ __('Admin') }}</div>
                    </a>
                @endif
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="side-menu__title"> {{ __('Products') }} <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('user-add-product') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Add Product </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user-products') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">  All Product </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('user-product-category') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> {{ __('Categories') }}</div>
                </a>
            </li>


            <li>
                @if (user('extra.refund_request') == 1)
                <a href="{{ route('user-refunds') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title"> {{ __('Refunds') }}</div>
                </a>
                @endif
            </li>
            <li>
                <a href="{{ route('user-orders') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title">{{ __('Orders') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('user-shipping') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> {{ __('Shipping') }}</div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title">    {{ __('Service') }} <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-crud-data-list.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Data List </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-crud-form.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Form </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('stats') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title"> {{ __('Store Statistics') }} </div>
                </a>
            </li>

            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title"> {{ __('Others') }}<i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('user-settings') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">  {{ __('Settings') }} </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user-domains') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> {{ __('Domains') }} </div>
                        </a>
                    </li>
                </ul>
            </li>



                 <li>
                     <a href="{{ route('user-customers') }}" class="side-menu">
                         <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                         <div class="side-menu__title">  {{ __('Customers') }}</div>
                     </a>
                 </li>


            <li>
                <a href="side-menu-light-inbox.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="side-menu__title"> Inbox </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-file-manager.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="side-menu__title"> File Manager </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-point-of-sale.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title"> Point of Sale </div>
                </a>
            </li>


            <li>
                <a href="{{ route('user-chats') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="side-menu__title">   {{ __('Chat') }} </div>
                </a>
            </li>


            <li>
                <a href="{{ route('user-blog') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> {{ __('Blogs') }}</div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="side-menu__title"> Crud <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-crud-data-list.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Data List </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-crud-form.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Form </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-users-layout-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Layout 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Layout 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Layout 3 </div>
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="{{ route('user-profile', ['profile' => $user->username]) }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                    <div class="side-menu__title">  {{ __('View Store') }} <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('user-pages') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="side-menu__title">   {{ __('Pages') }}<i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
            </li>


            <li>
                <a href="{{ route('user-pages') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="side-menu__title">   {{ __('Pages') }}<i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Wizards <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Blog <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Pricing <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> FAQ <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login-light-login.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Login </div>
                        </a>
                    </li>
                    <li>
                        <a href="login-light-register.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Register </div>
                        </a>
                    </li>
                    <li>
                        <a href="main-light-error-page.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Error Page </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-update-profile.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Update profile </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-change-password.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Change Password </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="side-menu__title"> Components <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Grid <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-table.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Regular Table</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tabulator.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="side-menu__title">Tabulator</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-accordion.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Accordion </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-button.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Button </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-modal.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Modal </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-alert.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Alert </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-progress-bar.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Progress Bar </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tooltip.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Tooltip </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dropdown.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Dropdown </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-toast.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Toast </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-typography.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Typography </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-icon.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Icon </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-loading-icon.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Loading Icon </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                    <div class="side-menu__title"> Forms <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-regular-form.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Regular Form </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-datepicker.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Datepicker </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tail-select.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Tail Select </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-upload.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> File Upload </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-wysiwyg-editor.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Wysiwyg Editor </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-validation.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Validation </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="side-menu__title"> Widgets <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-chart.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Chart </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-slider.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Slider </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-image-zoom.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Image Zoom </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="item__number mb-4 radius-10 p-4 mt-3 mb-lg-0 bg-blue">
            <div class="icon">
                <i class="tio premium_outlined fs-30px c-white"></i>
            </div>
            <div class="body__content">
                <h5 class="mt-3 c-white fs-15px">{{ package('name') }}</h5>
                <p class="mb-3 c-white fs-12px">{{ __('Choose your desired plan') }}</p>
                <a href="{{ route('pricing') }}" class="fs-16px btn scale c-white btn-secondary rounded-8">
                    {{ __('Change Plan') }}
                </a>
            </div>
        </div>
    </nav>
@endif
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                    <i data-feather="search" class="search__icon dark:text-gray-300"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-4.jpg') }}">
                                </div>
                                <div class="ml-3">John Travolta</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johntravolta@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-11.jpg') }}">
                                </div>
                                <div class="ml-3">Tom Cruise</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">tomcruise@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-6.jpg') }}">
                                </div>
                                <div class="ml-3">John Travolta</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johntravolta@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-13.jpg') }}">
                                </div>
                                <div class="ml-3">Tom Cruise</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">tomcruise@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/preview-13.jpg') }}">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/preview-11.jpg') }}">
                            </div>
                            <div class="ml-3">Dell XPS 13</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/preview-3.jpg') }}">
                            </div>
                            <div class="ml-3">Samsung Q90 QLED TV</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/preview-5.jpg') }}">
                            </div>
                            <div class="ml-3">Nike Tanjun</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                <div class="notification-content pt-2 dropdown-box">
                    <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-4.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-11.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-6.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-13.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ url ('backend/dist/images/profile-5.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->


            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="{{ url ('backend/dist/images/profile-1.jpg') }}">
                </div>
                <div class="dropdown-box w-56">
                    <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                            <div class="font-medium">John Travolta</div>
                            <div class="text-xs text-theme-41 dark:text-gray-600">DevOps Engineer</div>
                        </div>
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                            <a href="{{ route('user-activities') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
   @yield('content')
    </div>
    <!-- END: Content -->
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="side-menu-dark-dashboard.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="{{ asset('backend/dist/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>
</html>