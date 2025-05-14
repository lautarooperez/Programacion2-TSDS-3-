<?php
interface calculable {
    public function calcularPerimetro();
}

class cuadrado implements calculable {
    private $lado;

    public function __constructor($lado){
        $this->lado = $lado;
    }
       
    public function calcularPerimetro() {
        return $this->lado * 4;
    }
}

class cuadrado implements calculable {
    private $radio;

    public function __constructor($radio){
        $this->radio = $radio;
    }
       
    public function calcularPerimetro() {
        return (pi()* 2) * $this->radio;
    }
}


$calculables = [new cuadrado(25), new circulo()];
foreach ($calculables as $calculable) {
    $calculable->calcularPerimetro();
}
?>