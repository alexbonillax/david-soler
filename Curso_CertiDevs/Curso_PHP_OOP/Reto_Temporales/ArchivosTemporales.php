<?php

class GestorTemporal {
    private string $rutaArchivo;
    private $manejador;

    public function __construct(string $nombreArchivo) {
        $this->rutaArchivo = $nombreArchivo;
        $this->manejador = fopen($this->rutaArchivo, 'w');
        if ($this->manejador) {
            print_r("Archivo '{$this->rutaArchivo}' creado y abierto." . PHP_EOL);
            fwrite($this->manejador, "Contenido inicial" . PHP_EOL);
        } else {
            print_r("Error al crear el archivo." . PHP_EOL);
        }
    }

    public function escribirLinea(string $texto): void {
        if ($this->manejador) {
            fwrite($this->manejador, $texto . PHP_EOL);
            print_r("Se escribió la línea: {$texto}" . PHP_EOL);
        }
    }

    public function __destruct() {
        if ($this->manejador) {
            fclose($this->manejador);
            print_r("Archivo cerrado." . PHP_EOL);
        }
        if (file_exists($this->rutaArchivo)) {
            unlink($this->rutaArchivo);
            print_r("Archivo '{$this->rutaArchivo}' eliminado." . PHP_EOL);
        }
    }
}

$gestor = new GestorTemporal("temporal.txt");
$gestor->escribirLinea("Línea de prueba");
print_r("Fin del script." . PHP_EOL);
