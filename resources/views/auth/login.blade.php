@extends('layouts.app')

@section('content')
<div class='container mx-auto flex h-screen items-center'>
    <div class='w-4/6 mt-10 h-screen flex flex-col justify-center items-center'>
        <div class='flex flex-col justify-center space-y-3 my-auto'>
            <p class='text-6xl'> Laravel and Tailwind CSS</p>
            <p class='text-sm italic font-light mx-2'>
                Sample project using laravel ang tailwind css
            </p>
        </div>
    </div>
    <div class="lg:w-2/6 lg:mx-0 w-full mx-2">
        <div class="bg-white rounded-lg px-6 py-4">
            <div class="font-semibold text-2xl my-3">{{ __('Login') }}</div>

            <div >
                <form method="POST" action="{{ route('login') }}"class="flex flex-col space-y-3">
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
                    <div class="w-full">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="form-text-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <div class="flex items-center mx-2 my-1 space-x-2">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="w-full flex items-center justify-between mt-2">
                         <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-info" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
