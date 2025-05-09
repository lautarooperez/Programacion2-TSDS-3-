<?php
class Rectangulo{
	public $largo;
	public $ancho;

	public function calcularArea(){
		return $this->largo*$this->ancho;}}
$rectangulo=new Rectangulo();
$rectangulo->largo=6;
$rectangulo->ancho=3;
echo "Largo: {$rectangulo->largo}, Ancho: {$rectangulo->ancho}, Area: ".$rectangulo->calcularArea();
?>