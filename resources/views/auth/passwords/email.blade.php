@extends('layouts.app')

@section('content')
<div>
    <div>Reset Password</div>
    <div>
        @if (session('status'))
            <div>{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">E-Mail Address</label>

                <div>
                    <input id="email"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required />

                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div>
                <button type="submit">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
