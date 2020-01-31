<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
    </head>
    <body>
        @include('nav')
        <h1>Welcome Full Stack Batch 1</h1>
        @yield('content')
        <p>Some additional text.</p>
    </body>
</html>
