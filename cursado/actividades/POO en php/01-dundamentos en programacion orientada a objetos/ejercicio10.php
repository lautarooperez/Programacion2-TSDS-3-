<?php
class Triangulo {
public $base;
public $altura;

    public function area() {
   		  return $this->base * $this->altura / 2;

	}
}
$triangulo = new Triangulo();
$triangulo->base = 4;
$triangulo->altura = 4;
echo "El área del triángulo es: " . $triangulo->area(); 

?>