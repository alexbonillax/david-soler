<?php

class Pajaro extends Animal {
    public function emitirSonido()
    {
        print_r($this->nombre . "dice Pio Pio!" . PHP_EOL);
    }
}
