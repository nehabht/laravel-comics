<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{'css/app.css'}}">
        @yield('custom-css')

    </head>
    <body>
        <!-- header -->
            @include('partials.header')
        
        <!-- main -->
        <main>
            <!-- jumbo -->
            @include('partials.jumbo')

            <!-- albums section -->
            @include('partials.comics')


        </main>

        <footer>

        </footer>


    </body>
</html>
