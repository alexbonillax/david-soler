<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>

</head>
<body style="background-color: #bceeff;">

<h1 style="font-family: 'Arial Black'">Listado de empleados y sus empresas</h1>
<ul style="font-family: Arial">
    @foreach($empleados as $empleado)
        <li>{{ $empleado->empleadoNombre }} - {{ $empleado->empresaNombre }}</li>
    @endforeach

</ul>
</body>
</html>
