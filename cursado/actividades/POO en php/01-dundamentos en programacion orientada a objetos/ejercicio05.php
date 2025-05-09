<?php
class Persona{
	public $nombre;
	public $edad;
	
	public function esAdulto(){
		if($this->edad >=18){
			return "True";
		}else{
			return "False";
}}}
$persona=new Persona();
$persona->nombre="roberto";
$persona->edad=15;
echo "{$persona->nombre} tiene {$persona->edad} años : ".$persona->esAdulto();

?>