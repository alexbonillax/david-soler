<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

    * {
        background: #FFFFFF;
        font-family: ibm plex sans;
    }

    body {

        background-size: auto;
        background-position: center;
        background-repeat: no-repeat;

    }

    h2 {
        background: white;
    }

    form {
        max-width: 400px;
        margin: 70px auto;
        padding: 50px;
        background: #323F48;
        border-radius: 10px;
    }

    label {
        display: block;
        margin-top: 10px;
        background: white;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        background: white;
    }

    button {
        margin-top: 15px;
        padding: 10px;
        width: 100%;
        background-color: #FFFFFF;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    button:hover {
        background-color: gray;
        color: white;
    }

    .error {
        color: #ff0000;
        margin-bottom: 10px;
        font-weight: bold;
    }

    div {
        background-color: white;
    }
</style>
<h2>Editar Perfil Desaverse</h2>
<form action="{{ route('perfil.update') }}" method="POSTe:</label>
    <input type="text" name="name" value="{{ $usuario->first_name }}">


<label>Nombre:</label>
<input type="text" name="first_name" value="{{ $usuario->first_name }}">
<br><br><label>Email:</label>
<input type="email" name="email" value="{{ $usuario->email }}">
<br><br><label>Teléfono:</label>
<input type="text" name="phone" value="{{ $usuario->phone }}">

<br><br><br><button type="submit">Guardar cambios</button>
</form>
