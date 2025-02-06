@extends('auth.authLayout')
@section('title')
    Registration | Laravel First Project
@endsection
@section('content')
<!-- login page start-->
<div class="container-fluid p-0"> 
    <div class="row m-0">
      <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="assets/images/login/1.jpg" alt="looginpage"></div>
      <div class="col-xl-5 p-0"> 
        <div class="login-card login-dark">
          <div>
            <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
            <div class="login-main"> 
              <form action="{{ route('user.registration') }}" method="POST" class="theme-form">
                @csrf
                @method('POST')
                <h4>Create your account</h4>
                <p>Enter your personal details to create account</p>
                <div class="form-group">
                  <label class="col-form-label pt-0">Your Name</label>
                  <div class="row g-2">
                    <div class="col-6">
                      <input class="form-control" type="text" required="" value="{{ old('first_name') }}" name="first_name" placeholder="First name">
                      @error('first_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                      @enderror
                    </div>
                    <div class="col-6">
                      <input class="form-control" type="text" required="" value="{{ old('last_name') }}" name="last_name" placeholder="Last name">
                      @error('last_name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" type="email" required="" value="{{ old('email_address') }}" name="email_address" placeholder="Test@gmail.com">
                  @error('email_address')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" value="{{ old('password') }}" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                    @error('user_password')
                        <span class="text-danger">
                          {{ $message }}
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group mb-0">
                  {{-- <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                  </div> --}}
                  <button class="btn btn-primary btn-block w-100" name="createNewUser" type="submit">Create Account</button>
                </div>
                <h6 class="text-muted mt-4 or">Or signup with</h6>
                <div class="social mt-4">
                  <div class="btn-showcase">
                    <a class="btn btn-light" href="javascript:void(0)" target="_blank">
                        <i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn 
                    </a>
                    <a class="btn btn-light" href="javascript:void(0)" target="_blank">
                        <i class="txt-twitter" data-feather="twitter"></i>twitter
                    </a>
                    <a class="btn btn-light" href="javscript:void(0)" target="_blank">
                        <i class="txt-fb" data-feather="facebook"></i>facebook
                    </a>
                  </div>
                </div>
                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route('user.login.page') }}">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
        // $('document').ready(function(){

        // });
    </script>
@endsection