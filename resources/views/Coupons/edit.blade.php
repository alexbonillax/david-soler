<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar cupón</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
    *{
        font-family: IBM Plex Sans;
        background: white;
    }
    .btn-actualizar {
        background-color: #4085cc;
        color: #ffffff;
        border: none;
        padding: 6px 12px;
        cursor: pointer;
    }

</style>
<body>
<div class="container">
    <h2>Editar cupón</h2>

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:  </label>
            <input type="text" name="code" id="code" value="{{ $coupon->code }}" required>
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $coupon->name }}" required>
        </div>
        <br>
        <button type="submit" class="btn-actualizar" onclick="return confirm('¿Estás seguro editar este cupón?')">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('coupons.index') }}">Volver a cupones</a>
</div>
</body>
</html>
