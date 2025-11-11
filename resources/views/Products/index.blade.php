<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desaverse 0.1 - LISTADO DE PRODUCTOS</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: IBM Plex Sans;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: IBM Plex Sans;
        }

        th, td {
            border: 1px solid #ffffff;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: font-family: ibm plex sans;
            background-color: #323F48;
            color: #ffffff;
        }

        a {
            display: inline-block;
            margin-bottom: 10px;
            color: #000000;
            font-size: 20px;
            font-family: ibm plex sans;
            text-decoration: none;
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

    <h2>Listado de Productos en Desaverse</h2>


    <a href="{{ route('products.create') }}" class="btn btn-edit">Crear nuevo producto</a>


    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre Corto</th>
            <th>Nombre Completo</th>
            <th>Descripción</th>
            <th>Precio/Ud</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->full_name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price_unit_id }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                            Eliminar
                        </button>
                        <td>

                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-edit">
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
