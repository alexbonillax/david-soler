<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desaverse 0.1 - cupones</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    @vite('resources/js/LetterAvatar.jsx')
    {{--    @vite(['resources/scss/principal.scss'])--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: ibm plex sans;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: ibm plex sans;
            background-color: white;
            align-content: center;
        }

        th, td {
            border: 1px solid #dbdbd7;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: font-family: ibm plex sans;
            background-color: #323F48;
            color: white;
        }

        a {
            display: inline-block;
            margin-bottom: 1px;
        }

        .btn-danger {
            background-color: #c0392b;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 10px;
        }


        .btn-edit {
            background-color: #4085cc;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 10px;
        }

        .btn-danger:hover {
            background-color: #e74c3c;
            border-radius: 10px;
        }

        .btn-edit:hover {
            background-color: #50a8ff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div id="ResponsiveAppBar" style="text-align: center">
    <form>
        <div align="center">
            <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
                 height=150px"><a href="edit.blade.php"></a><div id="app" data-username="{{ Auth::user()->first_name }}"></div></div>
<div class="container">

    <h2>Listado de cupones en Desaverse</h2>


    <a href="{{ route('coupons.create') }}" class="btn btn-edit">Crear nuevo cupón</a>


    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($coupons as $coupon)
            <tr>
                <td>{{ $coupon->id }}</td>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->name }}</td>
                <td>
                    <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar este cupón?')">
                            Eliminar
                        </button>
                        <td>

                            <a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-edit">
                                Editar
                            </a>

                        </td>

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
