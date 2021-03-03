<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body>
        <header>
            @include('partials.navbar')
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>
