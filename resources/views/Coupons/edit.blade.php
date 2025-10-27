<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar cupón</title>
</head>
<style>
    *{
        font-family: Arial;
        background: #e8e6e6;

    }
</style>
<body>
<div class="container">
    <h2>Editar cupón</h2>

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:</label>
            <input type="text" name="code" id="code" value="{{ $coupon->code }}" required>
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $coupon->name }}" required>
        </div>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('coupons.index') }}">Volver al listado</a>
</div>
</body>
</html>
