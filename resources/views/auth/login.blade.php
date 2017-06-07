@extends('admin.layouts.app')
@section('title', 'Login')
 @section('content')
   <div class="panel-body">
    <form class="form-signin" style='margin-top:5% !important' role="form" method="POST" action="{{ route('login') }}">
      <span class="panel-title"><h1><small>{{ $app = 'Nega Branca Beautifull'}}</small></h1></span>
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="sr-only">Email address</label>
              <input type="email" id="email" value="{{ old('email')}}" name='email' class="form-control" placeholder="Email address" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="sr-only">Password</label>
              <input type="password" id="password"  name='password' class="form-control" placeholder="Password" required>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
          <div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
          </div>
      </form>
    </div>
@endsection
