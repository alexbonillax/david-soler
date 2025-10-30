<!DOCTYPE html>
<html>
<head>

    <title>Pedidos y productos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        * {
            font-family: ibm plex sans;
        }
        body {
            background-color: white;
        }
        li {
            font-family: ibm plex sans;
        }
        h1 {
            font-family: ibm plex sans;
        }
        h3,h4{
            font-family: ibm plex sans;
            color: #323F48;
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

        }
        p{
            margin-top: 1rem;


        }
        strong{
            color: #323F48;
        }
    </style>
</head>

<body>
<h1>Pedidos y productos</h1>
<ul>
    <form method
    <label for="numOrderLimit">Pedidos a mostrar: </label>
    <input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 10)}}">
    <button type="submit" class="btn btn-update">Actualizar</button>
    </form>

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
    {{ $orders->links('pagination::bootstrap-4') }}
</ul>

</body>
</html>


