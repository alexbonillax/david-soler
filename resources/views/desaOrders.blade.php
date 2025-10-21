<!DOCTYPE html>
<html>
<head>
    <title>Pedidos Desaverse</title>

</head>
<body style="background-color: #e6e6e6;">

<h1 style="font-family: 'Arial Black'">Últimos 1000 Pedidos en Desaverse</h1>
<ul style="font-family: Arial">
    @foreach($orders as $order)
        <li>{{ print_r("Pedido:") . $order->orderId }} ----- {{ print_r("Cliente: ") . $order->customerName }}</li>
    @endforeach

</ul>
</body>
</html>
