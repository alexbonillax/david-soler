<?php

class Perro extends Animal {
    public function emitirSonido()
    {
        print_r($this->nombre . "dice Guau Guau!" . PHP_EOL);
    }

    public final function mostrarRaza(){
        print_r("Este perro es de raza desconocida" . PHP_EOL);
    }
}