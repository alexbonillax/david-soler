<!DOCTYPE html>
<html>
<head>
    <title>Cupones Desa</title>

</head>
<style>       @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
body{
    background-color: white;
}
</style>
<body>

<h1 style="font-family:'ibm plex sans'">Cupones Disponibles en Desaverse</h1>

<ul style="font-family: ibm plex sans">
    @foreach($coupons as $coupon)
        {{-- <li> Fecha: {{$orders->created_at}} <br> Pedido: {{$orders->code }} <br> Importe: {{$orders->net_amount }}</li>--}}
        <li style="font-family: ibm plex sans"> Código: {{$coupon->code}} <br> Cupón: {{$coupon->name}}</li><br>
    @endforeach

</ul>
</body>
</html>


