<!DOCTYPE html>
<html>
<head>
    <title>Pedidos Desaverse</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
    *{
        font-family: ibm plex sans;
    }
    body{
        background-color: white;
    }
    li{
        ffont-family: ibm plex sans;
    }
    h1{
        font-family: ibm plex sans;
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
<h1>Pedidos por cliente</h1>

<form method <label for="customerLimit">Clientes a mostrar: </label>
<input type="number" name="customerLimit" id="customerLimit" value="{{ request('customerLimit', 1000)}}">
<button type="submit" class="btn btn-update">Actualizar</button></form>

<ul>
    @foreach($customers as $customer)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li> <strong>Cliente:</strong> {{$customer->name}} <br> <strong>Pedidos realizados:</strong> {{$customer->orders_count}}
            <br> <strong>Rango:</strong> {{$customer->rank_tag}} <br> <strong>Fecha último pedido:</strong> {{$customer->last_order_at}}</li><br><hr>
    @endforeach
</ul>

<h1>Últimos Pedidos en Desaverse</h1>

<form method  <label for="numOrderLimit">Pedidos a mostrar: </label>
<input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 1000)}}">
<button type="submit" class="btn btn-update">Actualizar</button></form>

<ul>
    @foreach($orders as $order)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li> Fecha: {{$order->created_at}} <br> Pedido: {{$order->code}} <br> Cliente: {{$order->customer?->name }} <br> Importe: {{$order->net_amount }}</li><br>
        <hr>
    @endforeach
</ul>

</body>
</html>


