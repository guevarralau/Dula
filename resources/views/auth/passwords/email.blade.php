@extends('layouts.app')

@section('content')
<div class="container mx-auto flex h-screen items-start justify-center">
    <div class="lg:w-3/6 w-full px-6 py-4 bg-white rounded-lg shadow-md ">
        <div class="text-2xl">{{ __('Reset Password') }}</div>
        <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    
                <div class="w-full">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="form-text-error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                </div>
                <div class="w-full mt-3 flex lg:justify-start justify-center">
                    <button type="submit" class="btn btn-info">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
