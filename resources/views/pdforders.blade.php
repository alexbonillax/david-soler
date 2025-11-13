<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Imprimir Pedido en PDF</title>
    @viteReactRefresh
    @vite(['resources/scss/principal.scss'])
</head>
<body>
<h2>Listado de Pedidos</h2>
<ul>
    @foreach ($orders as $order)
        <div>
            <h3>ID Pedido: {{ $order->id }}</h3>
            <h4>{{$order->created_at}}</h4>
            <p><strong>Cliente:</strong> {{ $order->customer->name}}</p>

            <table style="width: 100%;">
                <thead>
                <tr style="background: #323F48; color: white">
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Colección</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @php $total = 0; @endphp

                @foreach ($order->orderProducts as $orderProduct)
                    @php
                        $subtotal = $orderProduct->quantity * $orderProduct->price;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>{{ $orderProduct->product->code }}</td>
                        <td>{{ $orderProduct->product->full_name }}</td>
                        <td>{{ $orderProduct->product->collection_name }}</td>
                        <td>{{ number_format($orderProduct->quantity) }}</td>
                        <td>{{ number_format($orderProduct->price, 2) }} €</td>
                        <td>{{ number_format($subtotal, 2) }} €</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <p><strong>Total del pedido:</strong> {{ number_format($total, 2) }} €</p>
            <hr>
        </div>
    @endforeach

</ul>
</body>
</html>
