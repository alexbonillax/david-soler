<?php

class ArchivoInexistenteException extends Exception {}

function abrirArchivo(string $nombreArchivo) {
    if (!file_exists($nombreArchivo)) {
        throw new ArchivoInexistenteException("El archivo '$nombreArchivo' no existe.");
    }

    return fopen($nombreArchivo, 'r');
}

$archivo = null;

try {
    $archivo = abrirArchivo('ruta_incorrecta.txt');
    print_r("Archivo abierto correctamente." . PHP_EOL);
} catch (ArchivoInexistenteException $e) {
    print_r("Error: " . $e->getMessage() . PHP_EOL);
} finally {
    if ($archivo) {
        fclose($archivo);
        print_r("Archivo cerrado correctamente." . PHP_EOL);
    } else {
        print_r("No se abrió ningún archivo, no hay nada que cerrar." . PHP_EOL);
    }
}
