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
                                        <h2 class="mt-3 mb-0 text-white">Verify Your Email Address</h2>
                                        @if (session('resent'))
                                        <p class="cnf-mail mb-1">A fresh verification link has been sent to your email address.</p>
                                        @endif
                                        <p class="cnf-mail mb-1">Before proceeding, please check your email for a verification link.</p>
                                        <p class="cnf-mail mb-1">If you did not receive the email</p>

                                        <form method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <div class="d-inline-block w-100">
                                                <button type="submit" class="btn btn-white mt-3">click here to request another</button>
                                                <!-- <a href="../backend/index.html" class="btn btn-white mt-3">Back to Home</a> -->
                                            </div>
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
