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

/////////////////////////////
//ACT2: RETO CLASE LIBRO
class Libro
{
    public string $titulo;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function mostrarTitulo()
    {
        echo $this->titulo;
    }
}

$libro = new Libro("El silencio de los corderos");
$libro->mostrarTitulo();

/////////////////////////////
//ACT3: RETO CONSTRUCTOR

class Product
{
    public string $name;
    public float $price;
    public int $stock;

    public function __construct(string $name, float $price, int $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function imprimirInformacion()
    {
        echo("Name:" . $this->name);
        echo("Price" . $this->price);
        echo("Stock" . $this->stock);
    }
}

$product = new Product("Teclado mecánico", 79.99, 10);
$product->imprimirInformacion();
