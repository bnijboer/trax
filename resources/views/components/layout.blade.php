<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name') }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav>
            <a href="{{ route('home') }}" class="nav-link {{ Route::current()->getName() === 'home' ? 'underline' : '' }}">Home</a>
            <a href="{{ route('tracks.index') }}" class="nav-link  {{ Route::current()->getName() === 'tracks.index' ? 'underline' : '' }}">All tracks</a>
        </nav>
        
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
