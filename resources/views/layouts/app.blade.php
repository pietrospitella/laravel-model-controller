<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title') | laravel-model-controller</title>
</head>
<body>
    @include('partials.header')
    <br>
    <main>
        @yield('content')
    </main>
    <br>
    @include('partials.footer') 
</body>
</html>