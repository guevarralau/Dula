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
            <div class='w-2/4 mt-10'>
                <div class='flex flex-col justify-between text-white w-4/6 mx-auto my-5 space-y-3'>
                    <a href="{{route('login')}}" type='button' class='btn btn-info'>
                        Login
                    </a>
                    <a href="{{route('register')}}" class='btn btn-success'>
                        Register
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection