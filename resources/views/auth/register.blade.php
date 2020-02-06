@extends('layouts.master')

@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less
                                than a minute</p>
                        </div>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input name="name" class="form-control" type="text" id="fullname"
                                    placeholder="Enter your name" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="fullname">Username</label>
                                <input name="username" class="form-control" type="text" id="username"
                                    placeholder="Enter unique your username" required>
                            </div>
                            <div class="form-group">
                                <label for="emailaddress">Email address</label>
                                <input name="email" class="form-control" type="email" id="emailaddress" required
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" class="form-control" type="password" required id="password"
                                    placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <label for="password">Password Confirmation</label>
                                <input name="password_confirmation" class="form-control" type="password" required
                                    id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" type="checkbox" class="custom-control-input"
                                        id="checkbox-signup">
                                    <label class="custom-control-label" for="checkbox-signup">
                                        I accept
                                        <a href="javascript: void(0);" class="text-dark">
                                            Terms and Conditions
                                        </a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-success btn-block" type="submit"> Sign Up </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50">
                            Already have account?
                            <a href="{{ route('login') }}" class="text-white ml-1">
                                <b>Sign In</b>
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

@push('scripts')
<script>
    const name = document.getElementById('fullname');
    const username = document.getElementById("username");

    name.addEventListener("change", function () {
        username.value = name.value.toString().toLowerCase()
            .replace(/\s+/g, '-') // Replace spaces with -
            .replace(/[^\w\-]+/g, '') // Remove all non-word chars
            .replace(/\-\-+/g, '-') // Replace multiple - with single -
            .replace(/^-+/, '') // Trim - from start of text
            .replace(/-+$/, '');
    })

</script>
@endpush
