@extends('layouts.master-auth')

@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span>
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                                </span>
                            </a>
                            <p class="text-muted mb-4 mt-3">
                                Enter your email address and password to access
                                admin panel.
                            </p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input name="email" class="form-control @error('email') is-invalid @enderror"
                                    type="email" id="emailaddress" placeholder="Enter your email" autofocus required>
                                @error('email')
                                <span class="text-sm text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input name="password" class="form-control" type="password" id="password"
                                    placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-info btn-block" type="submit"> Log In </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p>
                            <a href="#" class="text-white-50 ml-1">Forgot your password?</a>
                        </p>
                        <p class="text-white-50">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-white ml-1">
                                <b>Sign Up</b>
                            </a>
                        </p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
