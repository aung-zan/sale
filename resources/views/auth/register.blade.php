@extends('layouts.auth')

@section('content')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-up">
                <h1>Create an account</h1>
                <p class="creating">Having hands on experience in creating innovative designs,I do offer design solutions which harness.</p>
                <h2>Personal Information</h2>

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="error-message-design">
                            @foreach(($errors->all()) as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('users.register') }}">
                    @csrf

                    <div class="sign-u">
                        <div class="sign-up1">
                            <h4>Email Address<span class="required-color">*</span> </h4>
                        </div>
                        <div class="sign-up2">
                            <input type="email" name="email" class="register-input-design" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sign-u">
                        <div class="sign-up1">
                            <h4>Name<span class="required-color">*</span> </h4>
                        </div>
                        <div class="sign-up2">
                            <input type="text" name="name" class="register-input-design" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sign-u">
                        <div class="sign-up1">
                            <h4>Phone Number<span class="required-color">*</span> </h4>
                        </div>
                        <div class="sign-up2">
                            <input type="number" name="phone_number" class="register-input-design" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sign-u">
                        <div class="sign-up1">
                            <h4>Password<span class="required-color">*</span> </h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password" class="register-input-design" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sign-u">
                        <div class="sign-up1">
                            <h4 class="regiester-lable-position">Confirm Password<span class="required-color">*</span> </h4>
                        </div>
                        <div class="sign-up2">
                            <input type="password" name="password_confirmation" class="register-input-design" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="sub_home">
                        <div class="sub_home_left">
                            <input type="submit" value="Create">
                        </div>
                        <div class="sub_home_right">
                            <p>Go Back to <a href="{{ route('users.home') }}">Home</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
