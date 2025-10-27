<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de cupones en Desaverse, a fecha de</title>
    <style>

        *{
            background: #e8e6e6;
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
        }


        .btn-edit {
            background-color: #4085cc;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #e74c3c;
        }
        .btn-edit:hover {
            background-color: #50a8ff;
        }
    </style>
</head>
<body>
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
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cupón?')">
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
