@php 
$pageTitle = 'Register Page'
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
                        Sign Up
                    </h1>
                    <a class="opposite-link" href="{{ route('login') }}">Sign In</a>
                </div>

                <button class="btn btn-block btn-google">
                    <i class="flaticon-google-glass-logo icons"></i>
                    Sign Up with Google
                </button>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control input-signin" type="text" name="name" :value="old('name')" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control input-signin" type="email" name="email" :value="old('email')" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control input-signin" type="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" class="form-control input-signin" type="password" name="password_confirmation" required>
                    </div>
                   
                    <button type="submit" class="btn btn-login"> Register </button>
                </form>

            </div>

        </div>
    </div>


</div>




@include('layouts.e_script')