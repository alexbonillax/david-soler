<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear cupón</title>
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
