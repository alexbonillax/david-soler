<?php

interface IExportable{
    public function exportar(): string;
}

class Archivo implements IExportable
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function exportar(): string
    {
        return("Exportando archivo:" . $this->nombre . PHP_EOL);
    }
}

$archivo = new Archivo("documento.txt");
print_r($archivo->exportar().PHP_EOL);