@extends('layouts.app')

@section('content')
<div class="row">
    <div class="cloumn medium-8 medium-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="column medium-4">
                            <label for="name" class="medium-text-right control-label{{ $errors->has('name') ? ' is-invalid-label' : '' }}">Name</label>
                        </div>

                        <div class="column medium-6 end">

                            <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid-input' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="form-error is-visible">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="column medium-4">
                            <label for="email" class="control-label medium-text-right{{ $errors->has('email') ? ' is-invalid-label' : '' }}">E-Mail Address</label>
                        </div>
                        
                        <div class="column medium-6 end">
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="form-error is-visible">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                    </div>

                    <div class="row">
                        
                        <div class="column medium-4">
                            <label for="password" class="medium-text-right control-label{{ $errors->has('password') ? ' is-invalid-label' : '' }}">Password</label>
                        </div>
                        
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
                            <label for="password-confirm" class="medium-text-right control-label">Confirm Password</label>
                        </div>

                        <div class="column medium-6 end">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column medium-6 medium-offset-4">
                            <button type="submit" class="button">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
