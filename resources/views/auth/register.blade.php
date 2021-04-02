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
                    <div class="font-semibold text-2xl my-3">{{ __('Register') }}</div>

                    <div >
                        <form method="POST" action="{{ route('register') }}" class="flex flex-col space-y-3">
                            @csrf
                            <div class="w-full">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-input" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required autocomplete="name"
                                >
                                @error('name')
                                    <span class="form-text-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="w-full">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        
                                <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email">
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

                            <div class="w-full flex items-center justify-between mt-2">
                                <button type="submit" class="btn btn-success text-white">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{route('login')}}" class="btn btn-primary text-white">
                                    {{ __('Login') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
