<?php
abstract class animal{
abstract public function alimentarse();
}
class leon extends animal{
private $comida;
    public function __construct($comida){
	    $this->comida = $comida;
    }
    public function alimentarse (){
	    echo "el leon se esta alimentando con {$this->comida}";
    }
}
class pajaro extends animal{
 private $comida;
    public function __construct($comida){
	    $this->comida = $comida;
    }
    public function alimentarse (){
	    echo "el pajaro se esta alimentando con {$this->comida}";
    }
}
$animales = [ new leon("liebre"), new pajaro ("semillas")];
foreach ($animales as $animal);
{
	$animal->alimentarse();
}
?>