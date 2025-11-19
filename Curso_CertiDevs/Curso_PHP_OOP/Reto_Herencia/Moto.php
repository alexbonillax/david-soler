<?php

class Moto extends Vehiculo{

    public function encender()
    {
        print_r("Name:" . $this->marca . "<br>");
        print_r("Year:" . $this->year . "<br>");
    }
}