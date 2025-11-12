<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    @vite(['resources/scss/principal.scss'])
</head>
<body>
<div id="ResponsiveAppBar" style="text-align: center">
    <div align="center">
        <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
             height="150px">
        <div id="app" data-username="{{ Auth::user()->first_name }}"></div>
    </div>
    <br><br>
    <h2>Editar Perfil Desaverse</h2>
    <form action="{{ route('perfil.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        Nombre: <input type="text" name="first_name" value="{{ $usuario->first_name }}">
        <br>
        Apellidos: <input type="text" name="last_name" value="{{ $usuario->last_name }}">
        <br>
        Email: <input type="email" name="email" value="{{ $usuario->email }}">
        <br>
        Teléfono: <input type="text" name="phone" value="{{ $usuario->phone }}">
        <br><br>
        <button type="submit" class="btn-actualizar">Guardar cambios</button>
    </form>
</div>
</body>
</html>
