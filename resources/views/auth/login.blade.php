<!DOCTYPE html>
<html>
<head>
    <title>Login Desa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            background: #323F48;
            font-family: ibm plex sans;
        }

        body {
            background-image: url("https://forbes.es/wp-content/uploads/2023/05/fotonoticia_20230505145042_9999-1200x675.jpg");
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
            background: #ffffff;
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
            background-color: #323F48;
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
</head>
<body>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div align="center">
        <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
             height=150px>

    </div>
    <h2>Login en Desa App</h2>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Entrar</button>
</form>

</body>
</html>
