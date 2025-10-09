<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpParser\Node\Stmt\Else_;

class Sandbox extends Command
{

    protected $signature = 'sandbox';

    public function handle()
    {
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
        $this->gradeStatistics([7.5, 9.0, 4.8, 6.2, 5.0, 3.9]);
        die;


        // Variable
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
}
