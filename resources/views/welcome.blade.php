<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desaverse 0.1 - GRUPO DESA</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @vite('resources/js/ResponsiveAppBar.jsx')
    @vite('resources/js/LetterAvatar.jsx')
    {{--    @vite(['resources/scss/principal.scss'])--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');

        * {
            font-family: ibm plex sans;
            background: #white;
        }

        h1 {
            font-family: ibm plex sans;
        }

        a {
            color: black;
            font-size: 20px;
            font-family: ibm plex sans;
            text-decoration: none;
        }

        html, body {
            padding: 0px;
            margin: 0px;
            background-color: gray;
            width: 100vw;
        }

        body * {
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: -50px auto;
            padding: 50px;
            background: #ffffff;
            border-radius: 10px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
<div id="ResponsiveAppBar" style="text-align: center">
<form>
    <div align="center">
        <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px"
             height=150px"><a href="edit.blade.php"></a><div id="app" data-username="{{ Auth::user()->first_name }}"></div></div>
    <form><br>
        <h1 style="text-align: center">Bienvenido a Desaverse v0.1</h1>
        <br> <div id="app" style="text-align: center"></div>
        <center>
            <FORM method=GET action="http://www.chatgpt.com">
                <A HREF="http://www.chatgpt.com">
                    <IMG SRC="desia.jpg" width="200px" border="0" align="absmiddle"></A>

            </FORM>
            <br><br><br>

            <h1>Evolución de ventas 2025</h1>

            <canvas id="ordersChart" width="400" height="200"></canvas>
            <script src="{{ asset('js/ordersChart.js') }}"></script>

            <script>
                const ctx = document.getElementById('ordersChart').getContext('2d');
                const ordersChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($labelsMonth),
                        datasets: [{
                            label: 'Pedidos por mes',
                            data: @json($totalMonth),
                            backgroundColor: 'Purple',
                            borderColor: 'purple',
                        }]
                    },
                    options: {
                        animations: {
                            tension: {
                                duration: 2000,
                                easing: 'linear',
                                from: 0.5,
                                to: 0,
                                loop: true
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <h3>Facturación provisional en 2025: €{{ number_format($totalYear, 2, ',', '.') }}</h3>

</body>
</html>
