<?php

namespace App\Console\Commands;
use Exception;
use Illuminate\Console\Command;


class Vehiculo {
    public string $marca;
    public string $modelo;

    class Coche extends Vehiculo {
        public int $numPuertas;
    }
    class Motos extends Vehiculo {
        public int $cilindrada;
    }

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numPuertas =$numPuertas;
        $this->cilindrada =$cilindrada;
    }

    public function arrancar()
    {
        print_r("El vehículo" . " " . $this->marca . " " .$this->modelo . " " ."está arrancando...");

    }
}
$miVehiculo = new Vehiculo("Skoda", "Octavia");
$miVehiculo->arrancar();
$miCoche = new Coche("Seat", "Ibiza", 4);
$miCoche->arrancar();
$miMoto = new Motos("Ducati", "Panigale", 1000);
$miMoto->arrancar();

die;


class Sandbox2 extends Command
{
    protected $signature = 'sandbox2';


    public function handle()
    {
        print_r("print test para el sandbox2");

    }
}
