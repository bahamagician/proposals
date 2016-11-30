@extends('layouts.app')

@section('content')
<div class="row">
    <div class="column medium-8 medium-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form  data-abide method="POST" action="{{ url('/login') }}" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="column medium-4">
                            <label for="email" class="control-label medium-text-right {{ $errors->has('email') ? ' is-invalid-label' : '' }}">E-Mail Address</label>
                        </div>

                        <div class="column medium-6 end">
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="form-error is-visible">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">

                        <div class="column medium-4">
                            <label for="password" class="control-label medium-text-right {{ $errors->has('password') ? ' is-invalid-label' : '' }}">Password</label>
                        </div>

                        <div class="column medium-6 end">
                            <div class="col-md-6">
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="column medium-6 medium-offset-4 end">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column medium-6 medium-offset-4 end">
                            <button type="submit" class="button">
                                Login
                            </button>

                            <a class="button button-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
