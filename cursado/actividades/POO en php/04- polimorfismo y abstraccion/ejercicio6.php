<?php
abstract class trabajador {
    abstract public function calcularingreso();
}

class fijo extends trabjador {
    private $salarioFijo;
    public function __constructor($salarioFijo){
        $this->salariofijo = $salarioFijo;
    }
    public function calcularingreso() {
        return $this->salarioFijo;
    }
}
class temporal extends trabjador {
    private $horas;
    private $pagoPorHora;

    public function __constructor($horas, $pagoPorHora){
        $this->horas = $horas;
        $this->pagoPorHoras = $pagoPorHora;
    }
    public function calcularingreso($salarioTemporal) {
      $salarioTemporal= $this->horas * $this->pagoPorhoras ;
    }
}


$trabajadores = [new fijo(2), new temporal(10500,1)];
foreach ($trabajadores as $trabajador) {
    $trabajador->calcularingreso();
}
?>