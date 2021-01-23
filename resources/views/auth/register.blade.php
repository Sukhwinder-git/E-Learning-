@extends('layouts.app')

@section('content')
<!-- Material form register -->
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">

<h5 class="card-header  default-color white-text text-center py-4">
<strong>{{ __('Register') }}</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

<!-- Form -->
<form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}">
@csrf
<!-- Name -->
<div class="md-form">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
<label for="name">{{ __('Name') }}</label>
  @error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror  
    
</div>

<!-- Username -->
<div class="md-form">
<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
<label for="name">{{ __('Username') }}</label>
  @error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror  
    
</div>


<!-- E-mail -->
<div class="md-form mt-0">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
<label for="email" >{{ __('E-Mail Address') }}</label>
    
    @error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
    
<!-- Password -->
<div class="md-form">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
<label for="password" >{{ __('Password') }}</label>
    
<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
At least 8 characters and 1 digit
</small>
    @error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>

<!-- confirm password -->
<div class="md-form">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
<label for="password-confirm">{{ __('Confirm Password') }}</label>
</div>

<!-- Sign up button -->
<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Register') }}</button>
<hr>
<!-- Terms of service -->
<!-- Form -->
    </form>
 </div>
    </div>
    </div>
</div>
<!-- Material form register -->
@endsection
