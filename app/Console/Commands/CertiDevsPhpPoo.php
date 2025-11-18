<?php

/* CURSO CERTIDEVS - PHP POO */
//ACT1: RETO CLASES Y OBJETOS
class Coche{
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function imprimirInformacion(){
        echo("El vehículo Marca:" . $this->marca . " Modelo:" . $this->modelo . "está arrancando");
    }
}
$coche = new Coche("Seat", "Ibiza");
$coche->imprimirInformacion();
