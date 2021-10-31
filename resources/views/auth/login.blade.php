@php 
$pageTitle = 'Login Page'
@endphp
@include('layouts.head')


<div class="container-fluid px-0">
    <div class="flex-main-wrap">
        <div class="art-section">

        </div>
        <div class="form-section">
            <div class="login-form-wrap">

                <div class="d-flex justify-content-between mb-4">
                    <h1 class="title">
                        Sign in
                    </h1>
                    <a class="opposite-link" href="{{ route('register') }}">Sign Up</a>
                </div>

                <button class="btn btn-block btn-google">
                    <i class="flaticon-google-glass-logo icons"></i>
                    Sign in with Google
                </button>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="my-input">Username or Email address</label>
                        <input id="my-input" class="form-control input-signin" type="text" name="email" :value="old('email')"
                        required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="mb-0" for="my-input">Password</label>
                            @if (Route::has('password.request'))
                            <a class="nav-link forgot-pwd-link hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
                        <input id="my-input" class="form-control input-signin" type="password" name="password"
                        required autocomplete="current-password"
                            >
                    </div>
                   
                    <button type="submit" class="btn btn-login"> Log in </button>
                </form>

            </div>

        </div>
    </div>


</div>




@include('layouts.e_script')