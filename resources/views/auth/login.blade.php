@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>




<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('https://media.istockphoto.com/photos/shot-of-a-beautiful-young-woman-doing-some-paperwork-in-a-modern-picture-id1341697008?b=1&k=20&m=1341697008&s=170667a&w=0&h=UCt366xktPmZHchbcg_UGl2-tShyDMY3OUfFSqesuC8='); background-repeat: no-repeat; background-size: cover;">
        <div class="row w-100 mx-0 ">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light shadow shadow-lg rounded text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo text-center">
                <img src="{{asset('assetoo/img/new-logo.png')}}" alt="logo">
              </div> -->
              
              <strong><h2 class="text-center mb-5 border-bottom-2 shadow shadow-lg"> Login</h2></strong>
              <h6 class="fw-light text-center"></h6>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <!-- <input type="email" name="eamil" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  <span class='text-danger'>@error('email') {{$message}} @enderror</span> -->

                  <input id="email" type="email" class="form-control form-control-md " name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder='Email'>

                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  
                  <input id="password" type="password" class="form-control form-control-md " name="password" placeholder='Password'  autocomplete="current-password">
                  <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->

                <div class="mt-3" align="right">
                                <button  type="submit" class="btn btn-primary btn-md">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                <!-- <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div> -->
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div> -->
                <!-- <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
