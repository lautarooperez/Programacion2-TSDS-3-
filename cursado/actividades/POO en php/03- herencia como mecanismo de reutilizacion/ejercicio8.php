<?php
class Vehiculo {
    public $velicidad;

    public function acelerar($aceleracion) {
       $aceleracion = $this->velocidad +=10;
        echo "El vehículo esta yendo a {$this->velocidad}KM y acelero su velocidad ahora es de {$this->aceleracion}KM ";
    }
}

class camion extends Vehiculo {

    public function acelerar($aceleracion) {
    $aceleracion = $this->velocidad +=10;
    echo "El vehículo esta yendo a {$this->velocidad}KM y acelero su velocidad ahora es de {$this->aceleracion}KM ";
    }
}
$camion = new camion(80);
$camion->acelerar();  
?>