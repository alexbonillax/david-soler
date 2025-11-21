<?php

FASES PRINCIPALES

- ANALISIS
- DISEÑO
- IMPLEMENTACIÓN
- PRUEBAS
- MANTENIMIENTO

////////////////////////////////////////

- ANALISIS
    Algoritmo Requisitos
    // Definición de requisitos en comentarios
    // Requisito: Calcular el área de un rectángulo dado su base y altura
    // Requisito: Validar que los valores ingresados sean positivos
    FinAlgoritmo

////////////////////////////////////////

- DISEÑO
    Función CalcularAreaRectangulo(base, altura)
    // Validar que base y altura sean positivos
    // Retornar el cálculo del área
    FinFunción


////////////////////////////////////////


- IMPLEMENTACIÓN

function calcularAreaRectangulo($base, $altura)
{
    // Validar que base y altura sean positivos
    if ($base <= 0 || $altura <= 0) {
        print_r("Error: La base y la altura deben ser valores positivos." . PHP_EOL);
        return null; // No se calcula el área si los valores no son válidos
    }

    // Retornar el cálculo del área
    return $base * $altura;
}

// Ejecutar
$area = calcularAreaRectangulo(5, 10);
if ($area !== null) {
    print_r("El área del rectángulo es: $area" . PHP_EOL);
}


////////////////////////////////////////

- PRUEBAS

// Prueba con valores positivos
print_r(calcular_area_rectangulo(5, 10));  # Salida: 50

// Prueba con un valor negativo
print_r(calcular_area_rectangulo(-5, 10));  # Salida: Error: Valores negativos no permitidos


- MANTENIMIENTO Y ACTUALIZACIÓN


Actualización en PseInt para calcular el perímetro:

Función CalcularPerimetroRectangulo(base, altura)
    Si base > 0 y altura > 0 Entonces
        perimetro <- 2 * (base + altura)
    Sino
        Escribir "Error: Valores negativos no permitidos"
    FinSi
FinFunción


function calcularAreaRectangulo($base, $altura)
{
    // Validar que base y altura sean positivos
    if ($base <= 0 || $altura <= 0) {
        print_r("Error: La base y la altura deben ser valores positivos." . PHP_EOL);
        return null;
    }

    // Retornar el cálculo del área
    return $base * $altura;
}

function calcularPerimetroRectangulo($base, $altura)
{
    // Validar que base y altura sean positivos
    if ($base > 0 && $altura > 0) {
        return 2 * ($base + $altura);
    } else {
        print_r("Error: Valores negativos no permitidos" . PHP_EOL);
        return null;
    }
}

// añadido en php
$base = 5;
$altura = 10;

$area = calcularAreaRectangulo($base, $altura);
if ($area !== null) {
    print_r("Área del rectángulo: $area" . PHP_EOL);
}

$perimetro = calcularPerimetroRectangulo($base, $altura);
if ($perimetro !== null) {
    print_r("Perímetro del rectángulo: $perimetro" . PHP_EOL);
}

///////////////////////////////////////////1
