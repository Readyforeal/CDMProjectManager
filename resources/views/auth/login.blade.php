@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <section class="pt-5">
        <p class="text-center display-4">CDM</p>
    </section>

    <section>
        <div class="row">
            <div class="col-12 col-md-4 offset-0 offset-md-4">

                <p class="lead">Login to continue</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">

                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block btn-outline-secondary">
                            Login
                        </button>
                    </div>

                    <div class="form-group text-center mb-0">

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-secondary" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
