<?php
class Libro{
	public $titulo;
	public $autor;

	public function presentar(){
		echo "Titulo:{$this->titulo}, Autor:{$this->autor}.";}}
$libro=new Libro();
$libro->titulo="IT";
$libro->autor="pedro perez";
$libro->presentar();
?>