<?php
abstract class vehiculo {
    abstract public function desplazarse();
}

class bicicleta extends vehiculo {
    public function desplazarse() {
        echo "La bicicleta se desplaza por la fuerza de la piernas";
    }
}
class avion extends vehiculo {
    public function desplazarse() {
        echo "El avion se desplaza en el aire por motor";
    }
}

$vehiculos = [new bicicleta(), new avion()];
foreach ($vehiculos as $vehiculo) {
    $vehiculo->vehiculo();
}
?>