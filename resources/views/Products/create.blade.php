<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
    *{
    font-family: IBM Plex Sans;
        background: white;
    }
</style>
<body>
<div class="container">
    <h2>Crear Producto</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:</label>
            <input type="text" name="code" id="code" maxlength="10" required>
        </div><br>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>
        </div><br>
        <div>
            <label for="full_name">Nombre:</label>
            <input type="text" name="full_name" id="full_name" required>
        </div><br>
        <div>
            <label for="description">Descripción:</label>
            <input type="text" name="description" id="description" required>
        </div><br>
        <div>
            <label for="price_unit_id">Precio/Ud:</label>
            <input type="text" name="price_unit_id" id="price_unit_id" required>
        </div><br>
        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Volver a Productos</a>
</div>
</body>
</html>
