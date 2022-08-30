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
                                    <div class="p-3">
                                        <h2 class="mb-2 text-white">Sign Up</h2>
                                        <p>Create your Project Management Account.</p>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                    <input id="name" type="text" class="form-control floating-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    <label>Full Name</label>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="email" type="email" class="form-control floating-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        <label>Email</label>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="phone" type="number" class="form-control floating-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                                        <label>phone</label>
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <select name="position" class="form-control floating-input @error('position') is-invalid @enderror" value="" id="position" required autocomplete="position">
                                                            <option  value="" selected>Select one</option>
                                                            <option {{ old('position') == 'Supervisor' ? 'selected':''}} value="Supervisor">Supervisor</option>
                                                            <option {{ old('position') == 'Employee' ? 'selected':''}} value="Employee">Employee</option>
                                                        </select>                                                        
                                                        <label>Position</label>
                                                        @error('position')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="password" type="password" class="form-control floating-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                        <label>Password</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="password-confirm" type="password" class="form-control floating-input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                        <label>Confirm Password</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-white">Sign Up</button>
                                            <p class="mt-3">
                                            Already have an Account <a href="{{ route('login') }}" class="text-white text-underline">Sign In</a>
                                            </p>
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
</div>
@endsection
