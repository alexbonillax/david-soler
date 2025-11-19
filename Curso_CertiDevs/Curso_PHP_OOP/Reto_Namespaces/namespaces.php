<?php

namespace App {
    function mostrarMensaje(): string {
        return "[App] Mensaje desde el espacio de nombres App";
    }
}


namespace App\Utils {
    function mostrarMensaje(): string {
        return "[App\\Utils] Mensaje desde el espacio de nombres App\\Utils";
    }
}


namespace {

    use App\mostrarMensaje as mostrarApp;
    use App\Utils\mostrarMensaje as mostrarUtils;


    print_r(mostrarApp() . PHP_EOL);
    print_r(mostrarUtils() . PHP_EOL);
}