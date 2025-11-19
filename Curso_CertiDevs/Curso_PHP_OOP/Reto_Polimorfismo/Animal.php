<?php

abstract class Animal{
    protected string $nombre;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }
    public function emitirSonido()
    {
    }
}
