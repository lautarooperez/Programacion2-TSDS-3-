<?php
abstract class figrua {
    abstract public function area();
}

class triangulo extends figura {
    public $base;
    public $altura;
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area() {
       return ($this->base * $this->altura )/2;
    }
}
class circulo extends figura {
    private $radio;
    public function __construct($radio){
        $this->radio = $radio;
        }
    public function area() {
       return pi() * pow($this->radio, 2);
    }
}

$figura = [new triangulo(2,8), new circulo(15)];
foreach ($figuras as $figura) {
    $figura->area();
}
?>