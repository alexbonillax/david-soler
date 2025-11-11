<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desaverse 0.1 - PEDIDOS</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: ibm plex sans;
        }

        body {
            background-color: white;
        }
        form{
            margin: 10px;
        }
        li {
            font-family: ibm plex sans;
        }

        h1 {
            font-family: ibm plex sans;
            margin: 20px;
        }
        .btn-update {
            background-color: #4085cc;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 10px;
        }

        .btn-update:hover {
            background-color: #50a8ff;
            border-radius: 10px;
    </style>
</head>
<body>
<div id="ResponsiveAppBar" style="text-align: center">
    <form>
        <div align="center">
            <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
                 height=150px"><a href="edit.blade.php"></a><div id="app" data-username="{{ Auth::user()->first_name }}"></div></div></div>

<h1>Pedidos por cliente</h1>

<form>
    <label for="customerLimit">Clientes a mostrar: </label>
        <input type="number" name="customerLimit" id="customerLimit" value="{{ request('customerLimit', 1000)}}">
        <button type="submit" class="btn btn-update">Actualizar</button>
</form>

<ul>
    @foreach($customers as $customer)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li><strong>Cliente:</strong> {{$customer->name}} <br> <strong>Pedidos
                realizados:</strong> {{$customer->orders_count}}
            <br> <strong>Rango:</strong> {{$customer->rank_tag}} <br> <strong>Fecha último
                pedido:</strong> {{$customer->last_order_at}}</li><br>
        <hr>
    @endforeach
</ul>

<h1>Últimos Pedidos en Desaverse</h1>

<form>
    <label for="numOrderLimit">Pedidos a mostrar: </label>
        <input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 1000)}}">
        <button type="submit" class="btn btn-update">Actualizar</button>
</form>

<ul>
    @foreach($orders as $order)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li><strong>Fecha:</strong> {{$order->created_at}} <br> <strong>Pedido:</strong> {{$order->code}} <br> <strong>Cliente:</strong> {{$order->customer?->name }}
            <br> <strong>Importe:</strong> {{$order->net_amount }}</li><br>
        <hr>
    @endforeach
</ul>

</body>
</html>


