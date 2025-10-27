<!DOCTYPE html>
<html>
<head>
    <title>Pedidos Desaverse</title>

</head>
<body style="background-color: #e6e6e6;">

<h1 style="font-family:'Arial Black'">Pedidos por cliente</h1>

<ul style="font-family:'arial'">
    @foreach($customers as $customer)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family:'arial'"> Cliente: {{$customer->name}} <br> Pedidos realizados: {{$customer->orders_count}}</li><br>
    @endforeach

</ul>

<h1 style="font-family:'Arial Black'">Últimos Pedidos en Desaverse</h1>

<form method  <label for="numOrderLimit">Pedidos a mostrar: </label>
<input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 1000)}}">
<button type="submit">Actualizar</button>
</form>

<ul style="font-family:'arial'">
    @foreach($orders as $order)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family:'arial'"> Fecha: {{$order->created_at}} <br> Pedido: {{$order->code}} <br> Cliente: {{$order->customer?->name }} <br> Importe: {{$order->net_amount }}</li><br>
    @endforeach

</ul>
</body>
</html>


