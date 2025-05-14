<?php
class Animal {
    public $nombre;

    public function moverse() {
        echo "El animal {$this->nombre} se esta moviendo.";
    }
}

class pez extends Animal{
    public $tipoAgua;
    public function moverse() {
        echo "El animal {$this->nombre} se esta moviendo en agua{$this->tipoAgua}.";
    }
}

$animal = new pez("dori","salada");
$anima->moverse();  
?> 