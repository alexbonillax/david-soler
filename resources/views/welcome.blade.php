<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desaverse 0.1 - GRUPO DESA</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/scss/principal.scss'])
{{--            <style>--}}
{{--                @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');--}}

{{--                *{--}}
{{--                    font-family: ibm plex sans;--}}
{{--                    background: #white;--}}
{{--                }--}}
{{--                h1{--}}
{{--                        font-family: ibm plex sans;--}}
{{--                }--}}
{{--                a{--}}
{{--                    color: black;--}}
{{--                    font-size: 20px;--}}
{{--                    font-family: ibm plex sans;--}}
{{--                    text-decoration: none;--}}
{{--                }--}}
{{--                html, body{--}}
{{--                    padding:0px;--}}
{{--                    margin:0px;--}}
{{--                    background-color:gray;--}}
{{--                    width:100vw;--}}
{{--                }--}}
{{--                body * {--}}
{{--                    margin:0;--}}
{{--                    padding:0;--}}
{{--                }--}}

{{--                nav menuitem {--}}
{{--                    position:relative;--}}
{{--                    display:block;--}}
{{--                    opacity:0;--}}
{{--                    cursor:pointer;--}}
{{--                }--}}
{{--                nav menuitem > menu {--}}
{{--                    position: absolute;--}}
{{--                    pointer-events:none;--}}
{{--                }--}}
{{--                nav > menu { display:flex;--}}
{{--                    justify-content: center;--}}
{{--                    align-items: center;--}}
{{--                    padding: 0;--}}
{{--                    margin: 0 auto;--}}
{{--                }--}}
{{--                nav > menu > menuitem {--}}
{{--                    pointer-events: all;--}}
{{--                    opacity:1;--}}
{{--                }--}}
{{--                menu menuitem a {--}}
{{--                    white-space:nowrap;--}}
{{--                    display:block;--}}
{{--                }--}}
{{--                menuitem:hover > menu {--}}
{{--                    pointer-events:initial;--}}
{{--                }--}}
{{--                menuitem:hover > menu > menuitem,--}}
{{--                menu:hover > menuitem{--}}
{{--                    opacity:1;--}}
{{--                }--}}
{{--                nav > menu > menuitem menuitem menu {--}}
{{--                    transform:translateX(100%);--}}
{{--                    top:0; right:0;--}}
{{--                }--}}
{{--                nav {--}}
{{--                    margin-top: 40px;--}}
{{--                    margin-left: 40px;--}}
{{--                }--}}
{{--                nav a {--}}
{{--                    background:#323F48;--}}
{{--                    color:white;--}}
{{--                    min-width:300px;--}}
{{--                    transition: background 1s, color 0.5s, transform 0.5s;--}}
{{--                    margin:0px 6px 6px 0px;--}}
{{--                    padding:20px 70px;--}}
{{--                    box-sizing:border-box;--}}
{{--                    border-radius:3px;--}}
{{--                    box-shadow: 10px 10px 20px rgba(0, 0, 10, 0.5);--}}
{{--                    position:relative;--}}
{{--                    font-family: ibm plex sans;--}}
{{--                }--}}
{{--                nav a:hover:before {--}}
{{--                    content: '';--}}
{{--                    top:0;left:0;--}}
{{--                    position:absolute;--}}
{{--                    background:rgba(0, 0, 0, 0.2);--}}
{{--                    width:100%;--}}
{{--                    height:100%;--}}
{{--                    font-family: ibm plex sans;--}}
{{--                }--}}
{{--                nav > menu > menuitem > a + menu:after{--}}
{{--                    content: '';--}}
{{--                    position:absolute;--}}
{{--                    border:10px solid transparent;--}}
{{--                    border-top: 10px solid white;--}}
{{--                    left:12px;--}}
{{--                    top: -40px;--}}
{{--                }--}}
{{--                nav menuitem > menu > menuitem > a + menu:after{--}}
{{--                    content: '';--}}
{{--                    position:absolute;--}}
{{--                    border:10px solid transparent;--}}
{{--                    border-left: 10px solid white;--}}
{{--                    top: 20px;--}}
{{--                    left:-180px;--}}
{{--                    transition: opacity 0.6, transform 0s;--}}
{{--                }--}}
{{--                nav > menu > menuitem > menu > menuitem{--}}
{{--                    transition: transform 0.6s, opacity 0.6s;--}}
{{--                    transform:translateY(150%);--}}
{{--                    opacity:0;--}}
{{--                }--}}
{{--                nav > menu > menuitem:hover > menu > menuitem,--}}
{{--                nav > menu > menuitem.hover > menu > menuitem{--}}
{{--                    transform:translateY(0%);--}}
{{--                    opacity: 1;--}}
{{--                }--}}
{{--                menuitem > menu > menuitem > menu > menuitem{--}}
{{--                    transition: transform 0.6s, opacity 0.6s;--}}
{{--                    transform:translateX(195px) translateY(0%);--}}
{{--                    opacity: 0;--}}
{{--                    font-family: ibm plex sans;--}}
{{--                }--}}
{{--                menuitem > menu > menuitem:hover > menu > menuitem,--}}
{{--                menuitem > menu > menuitem.hover > menu > menuitem{--}}
{{--                    transform:translateX(0) translateY(0%);--}}
{{--                    opacity: 1;--}}
{{--                }--}}
{{--                form{--}}
{{--                max-width: 600px;--}}
{{--                margin: 100px auto;--}}
{{--                padding: 50px;--}}
{{--                background: #ffffff;--}}
{{--                border-radius: 10px;--}}
{{--                }--}}
{{--                .card{--}}
{{--                    background: white;--}}
{{--                    border-radius: 12px;--}}
{{--                    padding: 20px;--}}
{{--                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);--}}
{{--                    max-width: 600px;--}}
{{--                    margin: 0 auto;--}}
{{--                }--}}
{{--            </style>--}}
    </head>
    <body>
    <form>
    <div align="center">
        <img src="https://media.timtul.com/media/users/Logo_Tagline_Desa2_20240530105352.jpg" style="width: 300px" height=150px"></div><form>
            <h1 style="text-align: center">Bienvenido a Desaverse v0.1</h1>
            <br>
            <center>
                <FORM method=GET action="http://www.chatgpt.com">
                                <A HREF="http://www.chatgpt.com">
                                    <IMG SRC="desia.jpg" width="200px" border="0"  align="absmiddle"></A>

                </FORM>
    <nav>
        <menu>
            <menuitem id="menudesa">
                <a>Menú Principal DESA</a>
                <menu>
                    <menuitem><a href="/david-soler/public/desaOrders">Últimos pedidos</a></menuitem>
                    <menuitem><a href="/david-soler/public/desaorders2">Pedidos y productos</a></menuitem>
                    <menuitem><a href="/david-soler/public/coupons">Cupones</a></menuitem>
                    <menuitem><a href="/david-soler/public/products">Productos</a></menuitem>
                </menu></menu>
    </nav><br><br><br>

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
                                backgroundColor: '#48317a',
                                borderColor: '#48317a',
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
                <h3>Total neto del año 2025: €{{ number_format($totalYear, 2, ',', '.') }}</h3>

    </body>
</html>
