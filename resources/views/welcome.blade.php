@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <!-- Top content -->
    <div class="top-content" style="font-weight: bold">

        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1></h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5">

                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter email and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form action="{{ route('signin') }}" method="post" class="login-form" role="form">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email">Your E-Mail</label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password">Your Password</label>
                                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="background-color: #1b6d85">SignIn</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>

                    <div class="col-sm-5">

                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up now</h3>
                                    <p>Fill in the form below to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form action="{{ route('signup') }}" method="post" class="registration-form" role="form">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email">Your E-Mail</label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                        <label for="first_name">Your First Name</label>
                                        <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                        <label for="last_name">Your Last Name</label>
                                        <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" type="text" name="phone" id="phone" value="{{ Request::old('phone') }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password">Your Password</label>
                                        <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary"style="background-color: #1b6d85">SignUp</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection