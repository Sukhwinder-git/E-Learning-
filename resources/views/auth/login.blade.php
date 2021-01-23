@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-4">

<div class="col-md-4">
 <div class="card">

 @if(session('msg'))
<div class="alert alert-success">
{{ session('msg') }}
</div>
@endif
   <h5 class="card-header  default-color white-text text-center py-4">
    <strong>{{_('sign in') }}</strong>
   </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form  class="text-center" style="color: #757575;"method="POST" action="{{ route('login') }}">
     @csrf
      <!-- Email -->
      <div class="md-form">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="email">{{ __('E-Mail Address') }}</label>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- Password -->
      <div class="md-form">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label for="password">{{ __('Password') }}</label>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
          <input class="form-check-input mt-4 " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label pt-3" for="remember"> {{ __('Remember Me') }}</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
         @endif
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Login') }}</button>

      <!-- Register -->
      <p>Not a member?
        <a href="{{ route('register') }}">Register</a>
      </p>

 

    </form>
    <!-- Form -->

  </div>
  </div>
 </div>
</div>
<!-- Material form login -->
 

@endsection





