<?php

class Vehiculo{
    protected string $marca;
    protected int $year;


    public function __construct(string $marca, int $year) {
        $this->marca = $marca;
        $this->year = $year;
    }

    public function encender()
    {
        print_r("Name:" . $this->marca . "<br>");
        print_r("Year:" . $this->year . "<br>");
    }
}