<?php

$animales = [
    new Perro("Firulais"),
    new Gato("Misu"),
    new Pajaro("Piolín")
];

foreach ($animales as $animal) {
    $animal->emitirSonido();
}

$animales[0]->mostrarRaza();