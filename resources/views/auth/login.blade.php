@extends('layouts.auth')

@section('content')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">

                <div class="sign-in-form-top">
                    <h1>Log in</h1>
                </div>

                <div class="signin">

                    <div class="signin-rit">
                        <span class="checkbox1">
                             <label class="checkbox">Forgot Password ?</label>
                        </span>
                        <p><a href="#">Click Here</a> </p>
                        <div class="clearfix"> </div>
                    </div>

                    <form method="POST" action="{{ route('users.login') }}">
                        @csrf

                        <div class="log-input">
                            <div class="log-input-left">
                               <input type="text" class="user" name="email" value="{{ (old('email') == null)? 'Your Email' : old('email') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="log-input">
                            <div class="log-input-left">
                               <input type="password" class="lock" name="password" value="{{ (old('password') == null)? '' : old('password') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <input type="submit" value="Log in">
                    </form>
                </div>

                <div class="new_people">
                    <h2>For New People</h2>
                    <p>Having hands on experience in creating innovative designs,I do offer design
                        solutions which harness.</p>
                    <a href=" ">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
