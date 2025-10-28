<!DOCTYPE html>
<html>
<head>
    <title>Pedidos y productos</title>
    <style>
        * {
            font-family: Verdana;
        }

        body {
            background-color: #e6e6e6;
        }

        li {
            font-family: Verdana;
        }

        h1 {
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

        }
    </style>
</head>
<body>
<h1>Pedidos y productos</h1>

<ul>

    <form method
    <label for="numOrderLimit">Pedidos a mostrar: </label>
    <input type="number" name="numOrderLimit" id="numOrderLimit" value="{{ request('numOrderLimit', 3)}}">
    <button type="submit" class="btn btn-update">Actualizar</button>
    </form>

    @foreach ($orders as $order)
        <div style="margin-bottom: 2rem;">
            <h3>Pedido ID: {{ $order->id }}</h3>
            <p><strong>Cliente:</strong> {{ $order->customer->name }}</p>

            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; margin-top: 1rem;">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Código</th>
                    <th>Cantidad</th>
                    <th>Unidad</th>
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
                        <td>{{ $orderProduct->product->name }}</td>
                        <td>{{ $orderProduct->product->code }}</td>
                        <td>{{ $orderProduct->quantity }}</td>
                        <td>{{ $orderProduct->unit->name }}</td>
                        <td>{{ number_format($orderProduct->price, 2) }} €</td>
                        <td>{{ number_format($subtotal, 2) }} €</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <p style="margin-top: 1rem;"><strong>Total del pedido:</strong> {{ number_format($total, 2) }} €</p>
            <hr>
        </div>
    @endforeach
</ul>
</body>
</html>


