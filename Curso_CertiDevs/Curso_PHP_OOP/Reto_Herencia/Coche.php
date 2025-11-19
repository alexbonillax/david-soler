<?php

class Coche extends Vehiculo{
    private string $combustible;


    public function __construct(string $marca, int $year, string $combustible) {
        parent::__construct($marca, $year);
        $this->combustible = $combustible;
    }

    public function encender()
    {
        print_r("Combustible:" . $this->combustible . "<br>");
    }
}