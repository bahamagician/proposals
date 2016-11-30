@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="column medium-8 medium-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="callout success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form data-abide class="form-horizontal" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row">

                            <div class="column medium-4">
                                <label for="email" class="medium-text-right control-label {{ $errors->has('email') ? 'is-invalid-label' : '' }}">E-Mail Address</label>
                            </div>


                            <div class="column medium-6 end">
                                <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid-input' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">

                            <div class="column medium-4"></div>
                            <label for="password" class="medium-text-right control-label{{ $errors->has('password') ? ' is-invalid-label' : '' }}">Password</label>

                            <div class="column medium-6 end">
                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="row">
                            <div class="column medium-4">
                                <label for="password-confirm" class="medium-text-right control-label{{ $errors->has('password_confirmation') ? ' is-invalid-label' : '' }}">Confirm Password</label>
                            </div>
                            <div class="column medium-6 end">
                                <input id="password-confirm" type="password" class="{{ $errors->has('password_confirmation') ? ' is-invalid-input' : '' }}" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="form-error is-visible  ">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="column medium-6 medium-offset-4">
                                <button type="submit" class="button">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
