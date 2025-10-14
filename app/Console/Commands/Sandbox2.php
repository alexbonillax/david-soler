<?php

namespace App\Console\Commands;
use Exception;
use Illuminate\Console\Command;


class Vehiculo
{
    public string $marca;
    public string $modelo;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function arrancar()
    {
        print_r("El vehículo" . " " . $this->marca . " " .$this->modelo . " " ."está arrancando..." . PHP_EOL);
    }
}
    class Coche extends Vehiculo {
        public int $numPuertas;

        public function __construct(string $marca, string $modelo, int $numPuertas){
            parent::__construct($marca, $modelo);
            $this->numPuertas = $numPuertas;
    }
    public function arrancar(){
        print_r("El coche" . " " . $this->marca . " " .$this->modelo . " " . "con numero de puertas " . $this->numPuertas ." está arrancando..." . PHP_EOL);
    }
    }
    class Motos extends Vehiculo {
        public int $cilindrada;
        public function __construct(string $marca, string $modelo, int $cilindrada){
            parent::__construct($marca, $modelo);
            $this->cilindrada = $cilindrada;
        }
        public function arrancar(){
            print_r("La moto" . " " . $this->marca . " " .$this->modelo . " " . "con cilindrada " . $this->cilindrada ." está arrancando..." . PHP_EOL);
        }
    }



$miVehiculo = new Vehiculo("Skoda", "Octavia");
$miVehiculo->arrancar();
$miCoche = new Coche("Seat", "Ibiza", 4);
$miCoche->arrancar();
$miMoto = new Motos("Ducati", "Panigale", 700);
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
