<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desaverse 0.1 - CUPONES</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    @vite('resources/js/LetterAvatar.jsx')
    {{--    @vite(['resources/scss/principal.scss'])--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: ibm plex sans;
        }

        h1 {
            font-family: ibm plex sans;
        }

        a {
            color: black;
            font-size: 20px;
            font-family: ibm plex sans;
            text-decoration: none;
        }

        html, body {
            padding: 0px;
            margin: 0px;
            background-color: gray;
            width: 100vw;
        }

        body * {
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: -50px auto;
            padding: 50px;
            background: #ffffff;
            border-radius: 10px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
ASDASD
<div id="ResponsiveAppBar" style="text-align: center">
<h1 style="font-family:'ibm plex sans'">Cupones Disponibles en Desaverse</h1>

<ul style="font-family: ibm plex sans">
    @foreach($coupons as $coupon)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family: ibm plex sans"> Código: {{$coupon->code}} <br> Cupón: {{$coupon->name}}</li><br>
    @endforeach

</ul>
</body>
</html>


