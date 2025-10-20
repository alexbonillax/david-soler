<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Empleados y sus Empresas</h1>
    <ul>
        @foreach($empleados as $empleado)
            <li>{{ $empleado->empleadoNombre }} - {{ $empleado->empresaNombre }}</li>
        @endforeach
    </ul>
</body>
</html>
