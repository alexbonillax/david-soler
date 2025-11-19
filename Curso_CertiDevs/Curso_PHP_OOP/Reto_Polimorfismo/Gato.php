<?php

class Gato extends Animal {
    public function emitirSonido()
    {
        print_r($this->nombre . "dice Miau Miau!" . PHP_EOL);
    }
}
