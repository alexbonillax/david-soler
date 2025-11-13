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

    * {
        font-family: IBM Plex Sans;

    }

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
    <div id="ResponsiveAppBar" style="text-align: center">
        <div align="center">
            <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
                 height="150px">
            <div id="app" data-username="{{ Auth::user()->first_name }}"></div>
        </div>
        <br>
    <h2>Editar Producto</h2>

    <div>
        <label for="code">Código:</label>
        <input type="text" name="code" id="code" maxlength="10" required>
    </div>
    <br>
    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <br>
    <div>
        <label for="full_name">Nombre:</label>
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
        <input type="number" name="price_unit_id" id="price_unit_id" required>
    </div>
    <br>
    <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Volver a Productos</a>
</div>
</body>
</html>
