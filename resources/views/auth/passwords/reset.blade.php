@extends('layouts.app')

@section('content')
<div class="container mx-auto flex h-screen items-start justify-center">
    <div class="lg:w-3/6  w-full px-6 py-4 bg-white rounded-lg shadow-md">
        <div class="text-2xl">{{ __('Reset Password') }}</div>
        <div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="flex flex-col space-y-2 mt-3">
                    <div class="w-full">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-input" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="form-text-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="password" class="form-label">{{ __('Password') }}</label>

                        <input id="password" type="password" class="form-input" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="form-text-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="w-full">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                        
                    </div>
                </div>

                <div class="w-full mt-3">
                    <button type="submit" class="btn btn-info">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
