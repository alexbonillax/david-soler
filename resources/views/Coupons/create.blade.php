<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear cupón</title>
</head>
<style>
    *{
    font-family: Arial;
        background: #e8e6e6;

    }
</style>
<body>
<div class="container">
    <h2>Crear cupón</h2>

    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:</label>
            <input type="text" name="code" id="code" maxlength="5" required>
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('coupons.index') }}">Volver a Cupones</a>
</div>
</body>
</html>
