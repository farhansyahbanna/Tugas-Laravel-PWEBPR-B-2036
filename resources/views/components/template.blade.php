<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @if (!request()->routeIs('login') && !request()->routeIs('register'))
        @include('components.nav')
    @endif

    <div>
        @yield('content')
    </div>


</body>


</html>
