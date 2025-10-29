<!DOCTYPE html>
<html>
<head>
    <title>Productos Desa</title>

</head>
<body style="background-color: #e6e6e6;">

<h1 style="font-family:''">Productos Disponibles en Desaverse</h1>

<ul style="font-family:'arial'">
    @foreach($products as $product)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family:'arial'"> Código: {{$product->code}} <br> Cupón: {{$product->name}}</li><br>
    @endforeach

</ul>
</body>
</html>


