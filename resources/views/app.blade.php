<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <header class="py-5 bg-blue-600 text-white text-center">
            <h1>@yield('header', 'ContactApp')</h1>
        </header>
        @include('components.navbar') <!-- Tambahkan Navbar di sini -->
        <main class="py-5">
            @yield('content')
        </main>

        <footer class="text-center py-4 bg-blue-600 text-white">
            @yield('footer', 'ContactApp © 2024')
        </footer>
    </div>
</body>
</html>
