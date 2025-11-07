<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Desaverse')</title>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    https://fonts.googleapis.com/icon?family=Material+Icons
</head>

<body>

<div id="app" data-username="{{ Auth::user()->first_name }}"></div>

<main style="margin-top: 80px;">
    @yield('content')
</main>
</body>
</html>
