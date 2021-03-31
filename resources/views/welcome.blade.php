<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dula - Laravel and Tailwind CSS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class='container mx-auto'>
            <div class='flex justify-center mt-10'>
                <p class='text-6xl'> Laravel and Tailwind CSS</p>
            </div>
            <div class='flex flex-col justify-between text-white w-4/12 mx-auto my-5 space-y-3'>
                <button type='button' class='btn btn-success'>
                    Register
                </button>
                <button type='button' class='btn btn-info'>
                    Login
                </button>
            </div>
       </div>
    </body>
</html>
