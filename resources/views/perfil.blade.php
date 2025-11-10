
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: ibm plex sans;
            background: #white;
        }

        h1 {
            font-family: ibm plex sans;
        }

        a {
            color: black;
            font-size: 20px;
            font-family: ibm plex sans;
            text-decoration: none;
        }

        html, body {
            padding: 0px;
            margin: 0px;
            background-color: gray;
            width: 100vw;
        }

        body * {
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: -50px auto;
            padding: 50px;
            background: #ffffff;
            border-radius: 10px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .btn-actualizar {
            background-color: #4085cc;
            color: #ffffff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="ResponsiveAppBar" style="text-align: center">
    <form>
        <div align="center">
            <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
                 height=150px"><a href="edit.blade.php"></a><div id="app" data-username="{{ Auth::user()->first_name }}"></div></div>
<br><br><form>
<h2>Editar Perfil Desaverse</h2>
<form action="{{ route('perfil.update') }}" method="POSTe:</label>
    <input type="text" name="name" value="{{ $usuario->first_name }}">

<label>Nombre:</label>
<input type="text" name="first_name" value="{{ $usuario->first_name }}">
<br><br><label>Apellido:</label>
<input type="text" name="last_name" value="{{ $usuario->last_name }}">
<br><br><label>Email:</label>
<input type="email" name="email" value="{{ $usuario->email }}">
<br><br><label>Teléfono:</label>
<input type="text" name="phone" value="{{ $usuario->phone }}">

<br><br><br>
<button type="submit" class="btn-actualizar" onclick="return confirm('¿Estás seguro de guardar cambios?')">
     Actualizar
</button>

</form>
</body>
</html>
