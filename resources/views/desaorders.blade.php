<!DOCTYPE html>
<html>
<head>
    <title>Pedidos Desaverse</title>
<style>
    *{
        font-family: Verdana;
    }
    body{
        background-color: #e6e6e6;
    }
    li{
        font-family: Verdana;
    }
    h1{
        font-family: "Arial Black";
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
        <li> Cliente: {{$customer->name}} <br> Pedidos realizados: {{$customer->orders_count}}
            <br> Rango: {{$customer->rank_tag}} <br> Fecha último pedido: {{$customer->last_order_at}}</li><br>
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
    @endforeach
</ul>

</body>
</html>


