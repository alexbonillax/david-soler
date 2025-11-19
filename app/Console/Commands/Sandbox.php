<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Exception;


//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//class ErrorChecker
//{
//    public function YearCheck($year)
//    {
//
//        try {
//
//            if ($year > 2025) {
//                throw new \Exception(PHP_EOL . "No puedes viajar al futuro" . PHP_EOL);
//            }
//        } catch (\Exception $YearError) {
//            print_r("ERROR:" . $YearError->getMessage() . PHP_EOL);
//        }
//        print_r("El resto del programa continuará normalmente" . PHP_EOL);
//    }
//        }
//
//    $checker = new ErrorChecker();
//    $checker->YearCheck(2029);
//die;


//try {
//    throw new \Exception (PHP_EOL . "ERROR 0x123871" . PHP_EOL);
//    print_r("No hay errores, funciona perfecto" . PHP_EOL);
//} catch  (\Exception $error){
//print_r("Se ha detectado un error en el programa. Codigo de error:" . $error->getMessage() . PHP_EOL);
//}
//print_r("El resto de programa continuará normalmente" . PHP_EOL);
//

/**
 * 🧩 Ejercicio 1: Clase básica — “Coche”
 */

//class Coche {
//    public string $marca;
//    public string $modelo;
//    public string $year;
//
//    public function __construct(string $marca, string $modelo, int $year)
//    {
//        $this->marca = $marca;
//        $this->modelo = $modelo;
//        $this->year = $year;
//    }
//
//    public function mostrarInfo()
//    {
//        print_r("El vehículo es un " . $this->marca . " modelo " . $this->modelo . " del año " . $this->year . " " . "" . PHP_EOL);
//    }
//}
//$newCoche = new Coche("Seat", "Ibiza", 2022);
//$newCoche->mostrarInfo();
//$newCoche = new Coche("Renault", "Clio", 2025);
//$newCoche->mostrarInfo();
//die;

/**
 * 🧩 Ejercicio 2: Constructores y métodos — “Rectángulo”
 */

//class Rectangulo {
//    public $ancho;
//    public $alto;
//
//    public function __construct($ancho,$alto)
//    {
//        $this->ancho = $ancho;
//        $this->alto = $alto;
//    }
//    public function calcularArea()
//    {
//        return $this->ancho * $this->alto;
//
//    }
//    public function calcularPerimetro()
//    {
//        return 2 * ($this->ancho + $this->alto);
//
//    }
//}
//
//$miRectangulo = new Rectangulo( 50, 95);
//print_r("El area del rectangulo es " . $miRectangulo->calcularArea() . PHP_EOL);
//print_r("El perimetro del rectangulo es " . $miRectangulo->calcularPerimetro() . PHP_EOL);
//
//die;

/**
 * 🧩 Ejercicio 4: Gestión de errores — “División segura”
 */

//class Calculadora {
//    public function dividir($a, $b)
//    {
//        try {
//            if ($b == 0) {
//                throw new \Exception("No se puede dividir por cero");
//            }
//            return $a / $b;
//        } catch (Exception $e) {
//               print_r($e->getMessage());
//            }
//        }
//}
//
//$calculo = new Calculadora();
//$calculo->dividir(10, 2);
//print_r("El resultado es " . $calculo->dividir(10, 0) . PHP_EOL); //PREGUNTAR A ALEX, COM MOSTRAR BÉ
//die;

/**
 * 🧩 Ejercicio 5: Excepciones personalizadas — “Edad inválida”
 */
//
//class EdadInvalidaException extends Exception {}
//
//class Persona {
//    private $edad;
//
//    public function setEdad($edad){
//        try {
//            if ($edad < 0 || $edad > 120) {
//                throw new EdadInvalidaException("Edad no válida: $edad");
//            }
//        $this->edad = $edad;}
//
//        catch (EdadInvalidaException $e) {
//            print_r($e->getMessage());
//        }
//    print_r("Edad: " . $this->edad . PHP_EOL);
//    }
//}
//die;

//class Brand
//{
//    public string $name;
//    public ?string $color;
//
//    public function __construct(string $name, ?string $color = null)
//    {
//        $this->name = $name;
//        $this->color = $color;
//    }
//}
//
//class Vehiculo {
//    public Brand $marca;
//    public string $modelo;
//    public string $color;
//
//    public function __construct(Brand $marca, string $modelo, string $color)
//    {
//        $this->marca = $marca;
//        $this->modelo = $modelo;
//        $this->color = $color;
//    }
//
//    public function vehiculoFabricado()
//    {
//        print_r("El vehículo de marca " . $this->marca->name . " modelo " . $this->modelo . " color " . $this->color . " " . "está fabricado" . PHP_EOL);
//    }
//}
//
//class Moto extends Vehiculo {
//
//}
//
//class Patinete extends Vehiculo {
//
//}
//
//class Camion extends Vehiculo {
//
//    public string $tipoRemolque;
//
//    public function __construct(Brand $marca, string $modelo, string $color, string $tipoRemolque) {
//        parent::__construct($marca, $modelo, $color);
//        $this->tipoRemolque = $tipoRemolque;
//    }
//    public function vehiculoFabricado()
//    {
//        print_r("El vehículo de marca " . $this->marca->name . " modelo " . $this->modelo . " color " . $this->color . " Tipo de Remolque " . $this->tipoRemolque  . " está fabricado" . PHP_EOL);
//    }
//}
//
//class Autocar extends Vehiculo {
//
//    public string $numeroPasajeros;
//
//    public function __construct(Brand $marca, string $modelo, string $color, int $numeroPasajeros) {
//        parent::__construct($marca, $modelo, $color);
//        $this->numeroPasajeros = $numeroPasajeros;
//    }
//    public function vehiculoFabricado()
//    {
//        print_r("El vehículo de marca " . $this->marca->name . " modelo " . $this->modelo . " color " . $this->color . " con número de pasajeros total " . $this->numeroPasajeros  . " está fabricado" . PHP_EOL);
//    }
//}
//
//class Coche extends Vehiculo
//{
//
//    public int $numeroCinturones;
//
//    public function __construct(Brand $marca, string $modelo, string $color, int $numeroCinturones) {
//        parent::__construct($marca, $modelo, $color);
//        $this->numeroCinturones = $numeroCinturones;
//    }
//
//    public function vehiculoFabricado()
//    {
//        print_r("El vehículo de marca " . $this->marca->name . " modelo " . $this->modelo . " color " . $this->color . " número cinturones " . $this->numeroCinturones  . " está fabricado" . PHP_EOL);
//    }
//}
//
//class Tren extends Vehiculo
//{
//
//    public string $tipoMotor;
//    //public int $potenciaMotor;
//
//    public function __construct(Brand $marca, string $modelo, string $color, string $tipoMotor) {
//        parent::__construct($marca, $modelo, $color);
//        $this->tipoMotor = $tipoMotor;
//        //$this->potenciaMotor = $potenciaMotor;
//    }
//
//    public function vehiculoFabricado()
//    {
//        print_r("El vehículo de marca " . $this->marca->name . " modelo " . $this->modelo . " color " . $this->color . " tipo motor " . $this->tipoMotor  . " está fabricado" . PHP_EOL);
//    }
//}
//
//$miCoche = new Coche(new Brand("Volkswagen"), "Jetta", "Plata", 10);
//$miCoche->vehiculoFabricado();
//$miCoche = new Coche(new Brand("Alfa Romeo"), "147", "Rojo", 8);
//$miCoche->vehiculoFabricado();
//$miMoto = new Moto(new Brand("Ducati"), "147", "Rojo");
//$miMoto->vehiculoFabricado();
//$miPatinete = new Patinete(new Brand("Xiaomi"), "Fly500", "Negro");
//$miPatinete->vehiculoFabricado();
//$miCamion = new Camion(new Brand("Scania"), "R520 V8", "Amarillo", "Cisterna");
//$miCamion->vehiculoFabricado();
//$miCamion = new Camion(new Brand("Pegaso"), "Troner TX 400", "Dorado", "Refrigerado");
//$miCamion->vehiculoFabricado();
//$miCamion = new Camion(new Brand("Iveco"), "TurboStar", "Azul Cielo", "Plataforma Container");
//$miCamion->vehiculoFabricado();
//$miCamion = new Camion(new brand("Volvo"), "FH Aero", "Blanco", "Tauliner");
//$miCamion->vehiculoFabricado();
//$miAutocar = new Autocar(new Brand("Mercedes"), "Citaro", "Rojo", 60);
//$miAutocar->vehiculoFabricado();
//$miAutocar = new Autocar(new Brand("MAN"), "S150 Cityman", "Amarillo", 75);
//$miAutocar->vehiculoFabricado();
//$miTren = new Tren(new Brand("Renfe"), "S-130", "Rojo y Blanco", "Electrico");
//$miTren->vehiculoFabricado();
//$miTren = new Tren(new Brand("Talgo"), "Euromed 720", "Blanco y Violeta", "Diesel");
//$miTren->vehiculoFabricado();
//$miTren = new Tren(new Brand("Vectron"), "BR247", "Negro", "Diesel");
//$miTren -> vehiculoFabricado();
//
//die;

//$vehiculos = [new Coche(),new Moto(),new Patinete(),new Camion(),new Autocar()];
//
//$contadorCoches = 0;
//foreach ($vehiculos as $vehiculo) {
//    if ($vehiculo instanceof Coche) {
//        $contadorCoches++;
//    }}


class Sandbox extends Command
{
    protected $signature = 'sandbox';

    public function handle()
    {
        /**
         * PRUEBAS CON IFS TERNARIOS
         */
        $usuario = "admin";
        $estatus = ($usuario == "admin") ? "Acceso correcto" : "El usuario no existe";
        print_r(" " . $estatus . PHP_EOL);

        print_r("............................." . PHP_EOL);

        $edad = 19;
        $checkEdad = ($edad >= 18) ? "Mayor de edad, puedes entrar" : "Menor de edad, no puedes entrar";
        print_r(" " . $checkEdad . PHP_EOL);


        // Programa 1

        //$this->calculateFinalPrice(100, 0.10, 0.21); // 108.90
        //$this->calculateFinalPrice(50, 0.00, 0.21); // 60.50
        // $this->calculateFinalPrice(200, 0.25, 0.10); // 165.00
        // $this->calculateFinalPrice(200, -1, 0.10); // error, el descuento no es correcto
        // $this->calculateFinalPrice(200, 0.5, -0.10); // error, el impuesto no es correcto
        // die;

        // Programa 2

        //$this->minNumberOfBills(87); // {50:1, 20:1, 10:1, 5:1, 2:1, 1:0} (total 5 piezas)
        //$this->minNumberOfBills(3); // {2:1, 1:1} (total 2 piezas)
        //$this->minNumberOfBills(0); // tot a 0 (total 0 piezas)
        //$this->minNumberOfBills(83.5); // tot a 0 (total 0 piezas)
        //die;

        // Programa 3
        //$this->contactNormalizer("Anna López" , "ANNA.LOPEZ@example.com" ; "Es" );
        //$this->contactNormalizer(jose M . jose.m@example.com , es);
        //$this->contactNormalizer(Marta, marta@example , es); // email inválido
        //$this->contactNormalizer(Anna López, anna.lopez@example.com , ES ); // duplicado
        //die;

        // Programa 4
        //$this->gradeStatistics([7.5, 9.0, 4.8, 6.2, 5.0, 3.9]);
        //die;

        // Programa 5
        //$this->salesSummary("2025 - 01 - 01", "Teclado", 2, 25.50);
        //$this->salesSummary("2025 - 01 - 01", "Ratón", 1, 15.00);
        //$this->salesSummary("2025 - 01 - 02", "Monitor", 1, 199.99);
        //$this->salesSummary("2025 - 01 - 03", "Alfombrilla", -1, 10.00);
        //$this->salesSummary("2025 - 01 - 03", "Cables", 3, 5.00);
        //die;

        // Programa 6
        //$this->vendingMachine(1.0,2);
        //die;


        // Variable1
        $var = 1;

        // Nomenclatura de variables: anglès, camelCase
        $playerPoints = 1000;
        //$player_points = 1000; Incorrecte per Desa

        // Tipus bàsics
        // Números: int|float
        // Textos: string
        // Booleanos: bool -> 1/0
        $int = 1;
        $float = 1.0;
        $string = "Hello world";
        $bool = false;

        // Tipus avançats: arrays
        $array1 = [1, 2, 3, 4];
        $array2 = [1.0, 2.0, 3.0, 4.0];
        $array3 = ["Texto 1", "Texto 2", "Texto 3", "Texto 4", "Texto 5"];
        $array4 = [$int, $float, $string];
        //dd($array4);

        // Tipus avançats: objectes (clases)

        // Imprimir por terminal
        //print $int . PHP_EOL;
        //print_r("Hello world 2" . PHP_EOL);
        //echo "Hello world 3" . PHP_EOL;
        //dd($bool);

        // Fer debugging del programa -> analitzar línia a línia per trobar errors del codi
        //die;

        // Operaciones
        // Matemáticas: +, -, /, *
        // Comparació simple
        //dd("1" == 1.0); // true
        //dd("1" != 1.0); // false
        //dd(2 > 1); // true
        //dd(10 < 30); // true
        //dd(10 >= 30); // false
        //dd(10 <= 30); // true

        // Operadors lògics
        // && (and)
        // || (or)

        // i la comparació de valor i tipus (per defecte sempre utilitzem aquesta perquè és més segura)
        //dd("1" === 1.0); // false
        //dd("1" !== 1.0); // true

        // Control de fluxe de decisió: if/elseif/else
        $currentAmount = 900;
        $goodAmount = 1000;
        $minAmount = 0;

        if ($currentAmount > $minAmount && $currentAmount < $goodAmount) {
//            print_r("Ok" . PHP_EOL);
        } else if ($currentAmount > $goodAmount) {
//            print_r("Super Ok" . PHP_EOL);
        } else {
//            print_r("No ok" . PHP_EOL);
        }

        // Control de fluxe de repetició: while, foreach
        $array = ["orange", "banana", 3, 4, "apple", 6, 7, 8, 9, 10];
//        dd(count($array));

        // Imprimir item que hay en una determinada posición (index)
//        print_r($array[4]);
//        die;

        // foreach -> recorrer una array i fer un conjunt de operacions per cada item del array
        foreach ($array as $item) {
//            print_r("Item " . $item . PHP_EOL);
        }

        // while -> fer un conjunt de operacions N vegades mentre es compleixi una condició
        $index = 0;
        while ($index < count($array)) {
            print_r("Item " . $array[$index] . PHP_EOL);
            $index = $index + 1;
        }

        print_r("Fin del programa" . PHP_EOL);
    }

    /**
     * Precio final (descuento → IVA)
     *
     * Conceptos: variables, tipos numéricos, orden de operaciones, función con parámetros y retorno, validación básica.
     * Objetivo: implementar precio_final(precio_base, descuento, iva) donde descuento e iva son proporciones 0..1.
     * Requisitos:
     * • Aplicar primero el descuento y después el IVA.
     * • Redondear a 2 decimales.
     * • Si descuento o iva están fuera de [0,1], devolver un error/mensaje claro (o lanzar excepción).
     * Casos de prueba (resultado esperado):
     * • precio_final(100, 0.10, 0.21) → 108.90
     * • precio_final(50, 0.00, 0.21) → 60.50
     * • precio_final(200, 0.25, 0.10) → 165.00
     * Extensión: permitir iva opcional con valor por defecto 0.21.
     */
    public function calculateFinalPrice(float $price, float $discount, float $tax)
    {
        if ($discount < 0 || $discount > 1) {
            print_r("error, el descuento no es correcto" . PHP_EOL);
        } else if ($tax < 0 || $tax > 1) {
            print_r("error, el impuesto no es correcto" . PHP_EOL);
        } else {
            // Aplicar el descuento
            $finalPrice = $price * (1 - $discount);

            // Aplicar el impuesto
            $finalPrice = $finalPrice * (1 + $tax);

            // Redondear a 2 decimales
            //$finalPrice = round($finalPrice, 2);

            print_r($finalPrice . PHP_EOL);
        }
    }

    /**
     * Cambio mínimo (cajero)
     *
     * Conceptos: bucles, división y módulo, decisiones, acumuladores.
     * Objetivo: dado un importe entero en euros, calcular el número mínimo de billetes/monedas usando denominaciones [50, 20, 10, 5, 2, 1].
     * Requisitos:
     * • Usar un bucle que recorra las denominaciones y tome las máximas posibles de cada una.
     * • Devolver un mapa/objeto con el conteo por denominación y el total de piezas.
     * • Si el importe es < 0, error legible.
     * Casos de prueba (resultado esperado):
     * • 87 € → {50:1, 20:1, 10:1, 5:1, 2:1, 1:0} (total 5 piezas)
     * • 3 € → {2:1, 1:1} (total 2 piezas)
     * • 0 € → tot a 0 (total 0 piezas)
     * Extensión: añadir moneda de 0,50 € y cantidades con céntimos (usa importes en céntimos como enteros).
     */


    public function minNumberOfBills($inputAmount)

    {
        $billTypes = [50, 1, 10, 5, 2, 20, 0.50];
        rsort($billTypes);
        //print_r($billTypes);
        //die;

        $billCount = [0, 0, 0, 0, 0, 0, 0];
        $amount = $inputAmount;


        foreach ($billTypes as $index => $billType) {
            //print_r($index . " " . $billType . PHP_EOL);
            $count = floor($amount / $billType);
            $billCount[$index] = $count;
            $amount = $amount - $billType * $count;
//            $amount -= $billType * $count;
            //print_r("BILLCOUNT:" . $billCount[$index] . PHP_EOL);
            //print_r("AMOUNT:" . $amount . PHP_EOL . PHP_EOL);
        }

        /*
         *  if ($amount >= $billType) {
                $billCount + 1;;
                $amount = ($amount - $billTypes[$itemBillTypes]);
            } else ($itemBillTypes = $itemBillTypes + 1);

*/
        print_r("Els teus diners son: $inputAmount" . PHP_EOL);
        print_r($billCount[0] . " " . "Bitllets de 50" . PHP_EOL);
        print_r($billCount[1] . " " . "Bitllets de 20" . PHP_EOL);
        print_r($billCount[2] . " " . "Bitllets de 10" . PHP_EOL);
        print_r($billCount[3] . " " . "Bitllets de 5" . PHP_EOL);
        print_r($billCount[4] . " " . "Monedes de 2" . PHP_EOL);
        print_r($billCount[5] . " " . "Monedes de 1" . PHP_EOL);
        print_r($billCount[6] . " " . "Monedes de 0.50" . PHP_EOL . PHP_EOL);
        print_r(array_sum($billCount) . " " . "Total de peces" . PHP_EOL . PHP_EOL);

    }

    /*
     3) Normalizador de contactos

Conceptos: strings, recortes (trim), mayúsculas/minúsculas, arrays/objetos, validación y deduplicación.
Objetivo: a partir de líneas tipo " nombre ; EMAIL ; país ", producir objetos normalizados y filtrar inválidos/duplicados.
Requisitos:
• Normalizar: nombre con mayúscula inicial, email en minúsculas, país en código ISO2 mayúsculas (p. ej. es → ES).
• Validar email (regla simple aceptable: contener un @ y texto antes/después).
• Eliminar duplicados por email (quedarse con la primera aparición y contar cuántos se deduplican).
Entrada de ejemplo (4 líneas):

1. " Anna López ; ANNA.LOPEZ@example.com ; Es "
2. "jose M. ; jose.m@example.com ; es"
3. "Marta; marta@example ; es" (email inválido)
4. "Anna López; anna.lopez@example.com ; ES" (duplicado)
Salida esperada (resumen):

• Válidos únicos (2):
• { nombre: "Anna López", email: "anna.lopez@example.com", pais: "ES" }
• { nombre: "Jose M.", email: "jose.m@example.com", pais: "ES" }
• Inválidos: 1 (email sin dominio)
• Duplicados: 1 (mismo email que #1)
Extensión: exportar la lista válida a JSON.

     */


    public function contactNormalizer($ctName, $ctEmail, $ctCountry)
    {
    }

    /**
     * 4) Estadísticas de notas
     *
     * Conceptos: arrays, map/filter/reduce, ordenación, mínimos/máximos, decisiones (aprobado/suspenso).
     * Objetivo: dado un array de notas (0..10), calcular métricas y clasificaciones.
     * Requisitos:
     * • Media, mediana, mejor y peor nota.
     * • Contar aprobados (≥ 5.0) y suspensos.
     * • Ordenar descendente y obtener el top 3.
     * Datos de ejemplo: [7.5, 9.0, 4.8, 6.2, 5.0, 3.9]
     * Resultados esperados:
     * • Media ≈ 6.07; Mediana = 5.60
     * • Mejor = 9.0; Peor = 3.9
     * • Aprobados = 4; Suspensos = 2
     * • Top 3 = [9.0, 7.5, 6.2]
     * Extensión: devolver un histograma por tramos (0–<5, 5–<7, 7–<9, 9–10).
     */
    public function gradeStatistics($inputGrades)
    {

        print_r($inputGrades) . PHP_EOL;

        //$rsortInputGrades = rsort($inputGrades)
        //print_r($rsortInputGrades) . PHP_EOL;
        //$rsortInputGrades = rsort($inputGrades);
        //$sortInputGrades = sort($inputGrades);

        //print_r($rsortInputGrades) . PHP_EOL;
        //print_r($sortInputGrades) . PHP_EOL;


        //foreach ($inputGrades as $index => $inputGrade) {

        //print_r($inputGrades[$index] . PHP_EOL);
        //}
        //rsort($inputGrades) = $topGrades;
        //print_r($inputGrade) . PHP_EOL;
        //print_r($inputGrades) . PHP_EOL;

        //print_r($inputGrades[$index] . PHP_EOL);
        //print_r($inputGrades[$index] . PHP_EOL);
        //print_r($rsortInputGrades) . PHP_EOL;

        //print_r("Media:" . " " . $averageGrades[0] . PHP_EOL);
        //print_r("Mediana:" . " " . $mediumGrades[0] . PHP_EOL);

        $count = count($inputGrades);

        rsort($inputGrades);
        $best = $inputGrades[0];
        $best = max($inputGrades);
        print_r("Mejor nota:" . " " . $best . PHP_EOL);

//        $inputGradesBest = array_slice($inputGrades, 0, 1);
//        $inputGradesBestList = implode(",", $inputGradesBest);
//        print_r("Mejor nota:" . " " . $inputGradesBestList . PHP_EOL);

        $worst = $inputGrades[$count - 1];
        $worst = min($inputGrades);
        print_r("Peor nota:" . " " . $worst . PHP_EOL);

        $mean = round(array_sum($inputGrades) / $count, 2);
        print_r("Media:" . " " . $mean . PHP_EOL);

        // Mediana
        /*
         * Pasos para calcular la mediana
            OK - Ordenar los datos: Organiza todos los valores del conjunto de menor a mayor.
            OK - Identificar el caso: Determina si la cantidad de datos es par o impar.
            Caso impar: Si hay un número impar de datos, la mediana es el dato que se encuentra exactamente en el centro de la lista ordenada.
            Caso par: Si hay un número par de datos, identifica los dos valores centrales. Suma estos dos valores y divide la suma entre 2.
         */


        // Contar aprobados

        //print_r("Aprobados:" . " " . count($approved) . PHP_EOL);


        $approved = 0;

        foreach ($inputGrades as $grade) {
            if ($grade >= 5) {
                $approved = $approved + 1;
            } else {
            }
        }
        print_r("Aprobados:" . " " . $approved . PHP_EOL);


        $failed = 0;

        foreach ($inputGrades as $grade) {
            if ($grade < 5) {
                $failed = $failed + 1;
            }
        }
        print_r("Suspendidos:" . " " . $failed . PHP_EOL);


//        sort($inputGrades);
//        $inputGradesWorse = array_slice($inputGrades, 0, 1);
//        $inputGradesWorseList = implode(",", $inputGradesWorse);
//        print_r("Peor nota:" . " " . $inputGradesWorseList . PHP_EOL);

        //print_r"Aprobados:" . " " . $sortInputGrades . PHP_EOL;
        //print_r"Suspensos:" . " " . $rsortInputGrades . PHP_EOL;

        rsort($inputGrades);
        $inputGradesTop3 = array_slice($inputGrades, 0, 3);
        $inputGradesTop3List = implode(" , ", $inputGradesTop3);
        print_r("Notas del Top 3:" . "  " . $inputGradesTop3List . PHP_EOL);

        //print_r(explode(",", $inputGradesTop3List));

        sort($inputGrades);
        $mediana = $inputGrades;
        if ($count % 2 == 0) {
            //print_r("Notas pares" . PHP_EOL);
            $medianaCountVal1 = (($count / 2) - 1);
            $medianaCountVal2 = ($count / 2);
            $medianaCount = ($inputGrades[$medianaCountVal1] + $inputGrades[$medianaCountVal2]) / 2;
            //print_r("Mediana:" . " " . $inputGrades[$medianaCount] . PHP_EOL);
            print_r("Mediana:" . " " . $medianaCount . PHP_EOL);
        } else {
            //print_r("Notas Impares" . PHP_EOL);
            $medianaCount = floor($count / 2);
            //$medianaCount = $count / 2;
            print_r("Mediana:" . " " . $inputGrades[$medianaCount] . PHP_EOL);


            //$approved = array_filter($inputGrades, function ($grade){
            //   return $grade >= 5;
            //});


        }
    }

    /*
     *
     * 5) Resumen de ventas (mini-CSV en memoria)
     *
Conceptos: parsing simple, tipos numéricos, validación, acumuladores, agrupación por clave.
Objetivo: a partir de registros fecha, producto, unidades, precio_unitario, calcular ingresos totales, ticket medio y ingreso por día.
Requisitos:
• Ignorar filas inválidas (p. ej. unidades ≤ 0 o precio ≤ 0) y contarlas aparte.
• Ingresos = unidades * precio_unitario, redondeo a 2 decimales al final.
• Agrupar por fecha para encontrar el mejor día por ingresos.
Datos de ejemplo (5 registros):

1. 2025-01-01, Teclado, 2, 25.50  → 51.00
2. 2025-01-01, Ratón,   1, 15.00  → 15.00
3. 2025-01-02, Monitor, 1, 199.99 → 199.99
4. 2025-01-03, Alfombrilla, -1, 10.00 (inválida)
5. 2025-01-03, Cables, 3, 5.00    → 15.00
Resultados esperados:

• Ingresos totales (válidos): 280.99
• Nº ventas válidas: 4 → Ticket medio: 70.25
• Ingresos por día: 2025-01-01 → 66.00, 2025-01-02 → 199.99, 2025-01-03 → 15.00
• Mejor día: 2025-01-02
• Filas inválidas: 1
Extensión: producir un top-N de productos por ingresos.

     */

    public function salesSummary($salesDate, $salesProduct, $salesUnits, float $salesPrice)
    {
        print_r($salesDate . " " . $salesProduct . " " . $salesUnits . " " . $salesPrice . " " . PHP_EOL);


    }

    /* EJERCICIO 6
     *  Ejercicio: Simulación de una máquina expendedora en PHP
Objetivo: Crear un script que simule una máquina expendedora de productos. El usuario podrá seleccionar un producto y pagar con una cantidad de dinero.
El sistema debe verificar si el dinero es suficiente y devolver el cambio si corresponde.

Crea un array asociativo con productos. Cada producto debe tener:

Nombre
Precio

Muestra el listado de productos con sus precios.
Simula que el usuario elige un producto (puedes usar una variable como $seleccion = 2;).
Simula que el usuario introduce dinero (por ejemplo, $dinero = 2.00;).

Usa if para:

Verificar si el producto existe.
Verificar si el dinero es suficiente.
Calcular y mostrar el cambio si hay.
Mostrar un mensaje de error si no hay suficiente dinero o si el producto no existe.

💻 Ejemplo de salida esperada
Has seleccionado: Café - Precio: 1.50 €
Has introducido: 2.00 €
Cambio: 0.50 €
¡Gracias por tu compra!

O si no alcanza:
Has seleccionado: Snack - Precio: 2.50 €
Has introducido: 1.00 €
Dinero insuficiente. Por favor, introduce más dinero.
     */

    public function vendingMachine($money, $selectedProduct)
    {

        $products = [
            1 => ["name" => "Agua", "price" => 0.60],
            2 => ["name" => "Cocacola", "price" => 1.00],
            3 => ["name" => "RedBull", "price" => 2.35],
            4 => ["name" => "PatatasLays", "price" => 1.80],
        ];

        print_r(PHP_EOL . "Bienvenido a la maquina Expendedora de Grupodesa" . PHP_EOL . PHP_EOL);
        print_r("Listado de productos disponibles:" . PHP_EOL);

        foreach ($products as $product) {
            print_r($product["name"] . " " . $product["price"] . "€" . PHP_EOL);

        }

        print_r("................................" . PHP_EOL);
        print_r("Ha introducido:" . " " . $money . " " . "EUROS" . PHP_EOL);
        print_r("Ha seleccionado:" . $product["name"] . " " . $product["price"] . "€" . PHP_EOL);
        print_r("................................" . PHP_EOL);

        $count = count($products);


        if ($selectedProduct <= $count && $money >= $product["price"]) {
            print_r("GRACIAS POR TU COMPRA" . PHP_EOL);
        } else if ($selectedProduct >= $count) {
            print_r("ERROR: El producto no existe" . PHP_EOL);
        } else {
            print_r("Ha introducido:" . " " . $money . " " . "EUROS" . PHP_EOL);
            print_r("Ha seleccionado:" . $product["name"] . " " . $product["price"] . "€" . PHP_EOL);
            print_r("ERROR: Dinero insuficiente. Por favor, introduce más dinero " . PHP_EOL);

        }


    }
}
