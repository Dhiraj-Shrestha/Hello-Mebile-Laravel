@extends('admin.app',['activePage' => 'profile'])

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 login-section-wrapper">
        {{-- <div class="brand-wrapper">
         <img src="images/logo1.png" alt="logo" class="logo">
        </div> --}}
        <div class="login-wrapper my-auto">
          <h1 class="login-title">Hello Mobiles</h1>
          
          <div class="card-body">

            {{-- <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="email">

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                    <div class="col-md-6">
                        <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus>

                        @error('area')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Ward') }}</label>

                    <div class="col-md-6">
                        <input id="ward" type="number" class="form-control @error('ward') is-invalid @enderror" name="ward" value="{{ old('ward') }}" required autocomplete="area" autofocus>

                        @error('ward')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Near By') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="area" autofocus>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


          
                

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form> --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
               
                <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
                    {{-- <span class="label-input100">Username</span> --}}
                    <input class="input100" id="name" type="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">

                </div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                    {{-- <span class="label-input100">Username</span> --}}
                    <input class="input100" id="email" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">

                </div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Number is required">
                    {{-- <span class="label-input100">Username</span> --}}
                    <input class="input100" id="number" type="number" name="phone_number" placeholder="Enter number" value="{{ old('phone_number') }}">

                </div>

               

                <div class="form-group mb-4">
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        {{-- <span class="label-input100">{{ __('Password') }}</span> --}}
                        <input class="input100" id="password" type="password" name="password" required placeholder="Enter password">

                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        {{-- <span class="label-input100">{{ __('Password') }}</span> --}}
                        <input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Enter new password">

                    </div>
                </div>
                  <div class="wrap-input100 validate-input m-b-26" data-validate="City is required">
                {{-- <span class="label-input100">Username</span> --}}
                <input class="input100" id="city" type="city" name="city" placeholder="Enter your city" value="{{ old('city') }}">

            </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Area is required">
                  {{-- <span class="label-input100">Username</span> --}}
                  <input class="input100" id="area" type="area" name="area" placeholder="Enter your area" value="{{ old('area') }}">

              </div>

            

            <div class="wrap-input100 validate-input m-b-26" data-validate="Ward is required">
              {{-- <span class="label-input100">Username</span> --}}
              <input class="input100" id="ward" type="ward" name="ward" placeholder="Enter your ward" value="{{ old('ward') }}">

          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
            {{-- <span class="label-input100">Username</span> --}}
            <input class="input100" id="address" type="address" name="address" placeholder="Enter your address" value="{{ old('address') }}">
        </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
          </div>
          {{-- <a href="#!" class="forgot-password-link">Forgot password?</a> --}}
          <p class="login-wrapper-footer-text">Already have an account? <a href="{{ route('login') }}" class="text-reset">Login here</a></p>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block" style="margin-top: 20%, margin-left:25%">
        <img src="/images/onBoard1.png" alt="login image" class="login-img">
      </div>
    </div>
  </div>
@endsection
