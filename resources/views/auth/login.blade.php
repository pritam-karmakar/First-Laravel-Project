@extends('auth.authLayout')
@section('title')
    Login | Laravel First Project
@endsection
@section('content')
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0 d-flex justify-between login-sec-card">
          @if(session('registrationStatus'))
            <div class="d-flex justify-content-end mt-3">
              <div class="toast default-show-toast align-items-center text-light bg-success border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                <div class="d-flex justify-content-between">
                  <div class="toast-body">{{ session('registrationStatus') }}</div>
                  <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
              </div>
            </div>
          @endif
          @if(session('loginErrorStatus'))
            <div class="d-flex justify-content-end mt-3">
              <div class="toast default-show-toast align-items-center text-light bg-danger border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                <div class="d-flex justify-content-between">
                  <div class="toast-body">{{ session('loginErrorStatus') }}</div>
                  <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
              </div>
            </div>
          @endif
          <div class="login-card login-dark">            
            <div>
              <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form action="{{ route('user.login') }}" method="POST" class="theme-form">
                  @csrf
                  @method('PUT')
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email_address" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    {{-- <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div> --}}
                    <button class="btn btn-primary btn-block w-100" name="userlogin" type="submit">Sign in</button>
                  </div>
                  <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('user.register.page') }}">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection