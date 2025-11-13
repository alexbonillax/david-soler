<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar cupón</title>
</head>
@viteReactRefresh
@vite('resources/js/app.jsx')
@vite('resources/js/ResponsiveAppBar.jsx')
@vite(['resources/scss/principal.scss'])
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

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
    <div id="ResponsiveAppBar" style="text-align: center">
        <div align="center">
            <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
                 height="150px">
            <div id="app" data-username="{{ Auth::user()->first_name }}"></div>
        </div>
        <br>
<div class="container">
    <h2>Editar cupón</h2>

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
        @csrf

        <div>
            <label for="code">Código: </label>
            <input type="text" name="code" id="code" value="{{ $coupon->code }}" required>
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $coupon->name }}" required>
        </div>
        <br>
        <button type="submit" class="btn-actualizar" onclick="return confirm('¿Estás seguro editar este cupón?')">
            Actualizar
        </button>
    </form>

    <br>
    <a href="{{ route('coupons.index') }}">Volver a cupones</a>
</div>
</body>
</html>
