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
        }    nav[role="navigation"] {
                 display: flex;
                 justify-content: center;
                 margin-top: 1rem;
                 gap: 0.5rem;
             }

        nav[role="navigation"] a,
        nav[role="navigation"] span {
            padding: 0.4rem 0.75rem;
            color: #0d6efd;
            text-decoration: none;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            background-color: white;
            transition: background-color 0.2s ease, color 0.2s ease;
            font-size: 0.9rem;
        }

        nav[role="navigation"] a:hover {
            background-color: #0d6efd;
            color: white;
        }

        nav[role="navigation"] svg {
            width: 1rem;
            height: 1rem;
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

</ul>
{{ $orders->links('') }}
</body>
</html>


