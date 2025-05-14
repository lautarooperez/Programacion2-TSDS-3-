<?php
abstract class figura {
    abstract public function calculararea();
}

class caudrado extends figura {
    public $lado;

    public function __construct($lado){
    $this->lado = $lado;
    }
    public function calculararea() {
    return $this->lado * $this->lado;
    }
}

$cuadrado = new cuadrado (10);
echo "el area de este cuadrado es de " .$cuadrado->calculararea();
?>