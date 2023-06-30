<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="AvantSoft Technical Skill Evaluation">
        <meta name="keywords" content="PHP, Laravel, AvantSoft">
        <meta name="author" content="Lucas Vaz">
        <title>AvantSoft</title>
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>
