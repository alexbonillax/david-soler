<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos en Desaverse</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            background: white;
            font-family: IBM Plex Sans;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: IBM Plex Sans;
        }

        th, td {
            border: 1px solid #ddd;
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
            margin-bottom: 10px;
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
