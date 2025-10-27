<!DOCTYPE html>
<html>
<head>
    <title>Cupones Desa</title>

</head>
<body style="background-color: #e6e6e6;">

<h1 style="font-family:'Arial Black'">Cupones Disponibles en Desaverse</h1>

<ul style="font-family:'arial'">
    @foreach($coupons as $coupon)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family:'arial'"> Código: {{$coupon->code}} <br> Cupón: {{$coupon->name}}</li><br>
    @endforeach

</ul>
</body>
</html>


