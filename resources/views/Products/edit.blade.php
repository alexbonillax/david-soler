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
    <h2>Editar Producto</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf

        <div>
            <label for="code">Código:  </label>
            <input type="text" name="code" id="code" value="{{ $product->code }}" required>
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <br>
        <button type="submit" class="btn-actualizar" onclick="return confirm('¿Estás seguro editar este Producto?')">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('products.index') }}">Volver a Productos</a>
</div>
</body>
</html>
