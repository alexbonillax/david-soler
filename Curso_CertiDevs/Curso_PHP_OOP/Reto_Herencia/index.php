<?php


$coche = new Coche("Toyota", 2022, "Gasolina");
$moto = new Moto("Yamaha", 2021);
$coche = new Coche("Tesla", 2023, "Eléctrico");
$moto = new Moto("Honda", 2019);

print_r($coche->encender() . PHP_EOL);
print_r($moto->encender() . PHP_EOL);
