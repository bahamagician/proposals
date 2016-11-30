@extends('layouts.app')

<!-- Main Content -->
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

                <form data-abide class="form-horizontal" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="column medium-4">
                            <label for="email" class="medium-text-right control-label{{ $errors->has('email') ? ' is-invalid-label' : '' }}">E-Mail Address</label>
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
                        <div class="column medium-6 medium-offset-4">
                            <button type="submit" class="button">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
