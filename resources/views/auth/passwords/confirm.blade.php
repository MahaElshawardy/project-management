@extends('layouts.app')

@section('content')
<div class="wrapper">
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-6 bg-primary content-left" style="background-color: #4c5179 !important;">
                                    <div class="col-lg-12">
                                        <h2 class="mb-2 text-white">Confirm Password</h2>
                                        <p>Please confirm your password before continuing.</p>
                                        <form method="POST" action="{{ route('password.confirm') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input id="password" type="password" class="form-control floating-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
                                                        <label>Password</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-white">Confirm Password</button>
                                            @if (Route::has('password.request'))
                                            <p class="mt-3">
                                                <a href="{{ route('password.request') }}" class="text-white text-underline">Forgot Your Password?</a>
                                            </p>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 content-right">
                                    <img src="{{url('images/login/01.jpg') }}" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div
@endsection
