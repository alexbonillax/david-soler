<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de cupones en Desaverse</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        *{
            background: white;
            font-family: ibm plex sans;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: ibm plex sans;
            background-color: #323F48;
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
