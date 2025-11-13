<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
@viteReactRefresh
@vite('resources/js/app.jsx')
@vite('resources/js/ResponsiveAppBar.jsx')
@vite(['resources/scss/principal.scss'])
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

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
    <h2>Crear Producto</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:</label>
            <input type="text" name="code" id="code" maxlength="10" required>
        </div>
        <br>
        <div>
            <label for="name">Nombre corto:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <br>
        <div>
            <label for="full_name">Nombre completo:</label>
            <input type="text" name="full_name" id="full_name" required>
        </div>
        <br>
        <div>
            <label for="description">Descripción:</label>
            <input type="text" name="description" id="description" required>
        </div>
        <br>
        <div>
            <label for="price_unit_id">Precio/Ud:</label>
            <input type="text" name="price_unit_id" id="price_unit_id" required>
        </div>
        <br>
        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Volver a Productos</a>
</div>
</body>
</html>
