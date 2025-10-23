<!DOCTYPE html>
<html>
<head>
    <title>Pedidos Desaverse</title>

</head>
<body style="background-color: #e6e6e6;">

<h1 style="font-family: 'Arial Black'">Últimos Pedidos en Desaverse</h1>


<form method  <label for="numOrderLimit">Pedidos a mostrar: </label>
<input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 1000)}}">
<button type="submit">Actualizar</button>
</form>


<ul style="font-family: Arial">
    @foreach($orders as $order)
        <li> Fecha: {{$order->orderDate}} <br> Pedido: {{$order->orderCode }} <br> Cliente: {{$order->customerName }} <br> Importe: {{$order->orderAmount }}</li><br>
    @endforeach

</ul>
</body>
</html>
