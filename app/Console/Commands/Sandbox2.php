<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * PRUEBA DE TRAIT
 */
//trait Logger{
//
//    public function log (string $message){
//        print_r("[LOG] a" . $message . PHP_EOL);
//        print_r("[LOG] a" . $message . PHP_EOL);
//    }}
//
//    class usuario {
//        use Logger;
//        public function crear(){
//            $this->log("Usuario creado");
//        }
//}


/**
 * PRUEBA DE HERENCIA DE CLASES Y SOBRESCRITURA DE METODOS (EJERCICIO 1/2 - + EJERCICIO 4 I 5))
 */
//trait Logger
//{
//    public function log(string $mensaje)
//    {
//        $fechaHora = date('[d-m-Y H:i:s]');
//        print_r($fechaHora . " " . $mensaje . PHP_EOL);
//    }
//}
//
//class Vehiculo
//{
//    public string $marca;
//    public string $modelo;
//
//    public function __construct(string $marca, string $modelo)
//    {
//        $this->marca = $marca;
//        $this->modelo = $modelo;
//    }
//
//    public function arrancar()
//    {
//        print_r("El vehículo " . $this->marca . " " . $this->modelo . " está arrancando..." . PHP_EOL);
//    }
//}
//
//class Coche extends Vehiculo
//{
//    use Logger;
//
//    public int $numPuertas;
//
//    public function __construct(string $marca, string $modelo, int $numPuertas)
//    {
//        parent::__construct($marca, $modelo);
//        $this->numPuertas = $numPuertas;
//    }
//
//    public function arrancar()
//    {
//        $mensaje = "El coche " . $this->marca . " " . $this->modelo . " está arrancando con " . $this->numPuertas . " puertas";
//        $this->log($mensaje);
//    }
//}
//
//class Motos extends Vehiculo
//{
//
//    use Logger;
//
//    public int $cilindrada;
//
//    public function __construct(string $marca, string $modelo, int $cilindrada)
//    {
//        parent::__construct($marca, $modelo);
//        $this->cilindrada = $cilindrada;
//    }
//
//    public function arrancar()
//    {
//        $mensaje = "La moto " . $this->marca . " " . $this->modelo . " está arrancando con " . $this->cilindrada . "cc";
//        $this->log($mensaje);
//    }
//}
//
//class Camion extends Vehiculo
//{
//    use Logger;
//
//    public int $numEjes;
//
//    public function __construct(string $marca, string $modelo, int $numEjes)
//    {
//        parent::__construct($marca, $modelo);
//        $this->numEjes = $numEjes;
//    }
//
//    public function arrancar()
//    {
//        $mensaje = "El camión " . $this->marca . " " . $this->modelo . " está arrancando con " . $this->numEjes . "" . PHP_EOL;
//        $this->log($mensaje);
//    }
//}
//
//function mostrarDatos(Vehiculo $vehiculo)
//{
//    $vehiculo->arrancar();
//}
//
//
//$vehiculos = [
//    new Coche("Mercedes", "Clase A", 3),
//    new Motos("Ducati", "Panigale V4", 700),
//    new Camion("Scania", "R520 V8", 4),
//    new Motos("Honda", "Hornet", 1000),
//];


//foreach ($vehiculos as $vehiculo) mostrarDatos($vehiculo);

//die;

/**
 * PRUEBA DE CLASES ABSTRACTAS E INTERFACES (EJERCICIO 3))
 */
//interface Imprimible
//{
//    public function imprimir();
//}
//
//abstract class Figura
//{
//    public string $color;
//
//    public function __construct(string $color)
//    {
//        $this->color = $color;
//    }
//
//    abstract public function calcularArea(): float;
//}
//class Cuadrado extends Figura implements Imprimible
//{
//    public float $lado;
//
//    public function __construct(string $color, float $lado)
//    {
//        parent::__construct($color);
//        $this->lado = $lado;
//    }
//    public function calcularArea(): float
//    {
//        return $this->lado * $this->lado;
//    }
//    public function imprimir()
//    {
//        print_r("Soy un cuadrado " .($this->color) . ". Mi área es: " . $this->calcularArea() . PHP_EOL);
//    }
//}
//class Circulo extends Figura implements Imprimible
//{
//    public float $radio;
//
//    public function __construct(string $color, float $radio)
//    {
//        parent::__construct($color);
//        $this->radio = $radio;
//    }
//    public function calcularArea(): float
//    {
//        return round(pi() * $this->radio * $this->radio, 2);
//    }
//    public function imprimir()
//    {
//        print_r("Soy un círculo " . ($this->color) . ". Mi área es: " . $this->calcularArea() . PHP_EOL);
//    }
//}
//
//$figuras = [
//    new Cuadrado("Rojo", 5),
//    new Circulo("Azul", 5)
//];
//
//foreach ($figuras as $figura) {
//    $figura->imprimir();
//}
//
//die;


class Sandbox2 extends Command
{
    protected $signature = 'sandbox2';

    /*PRUEBAS CON CONEXIONES A BASE DE DATOS*/
    // BD LOCAL DAVID: davidbd
    // BD LOCAL DEMO mysql: northwind

    public function handle()
    {
        //$empleados = DB::table('empleados')->where('ID', 1)->first();
        //$empleados = DB::table('empleados')->get();
        //print_r($empleados);

        //$empresas = DB::table('empresa')->select('nombre')->get();
        //print_r($empresas);

//        $empleados = DB::table('empleados')
//            ->join('empresa', 'empleados.empresa_id', '=', 'empresa.id')
//            ->get();
//        print_r($empleados);
//        print_r(PHP_EOL);

        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.code as orderCode', 'customers.name as customerName','orders.created_at as orderDate','orders.net_amount as orderAmount')
            ->limit(1000)
            //->limit(1000)
            ->orderBy('orders.id', 'desc')
            ->get();
        print_r($orders);
        print_r(PHP_EOL);

//        $clientes = DB::table('customers')
//            ->leftJoin('orders', 'customers.CustomerID', '=', 'orders.CustomerID')
//            ->select(
//                'customers.ContactName as clienteNombre',
//                'customers.City as ciudadCliente',
//                'orders.OrderID as pedidoId',
//                'orders.OrderDate as fechaPedido'
//            )
//            ->get();
//
//        print_r($clientes);
//        print_r(PHP_EOL);


    }
}
