<?php
class empleado {
    public $nombre;
    public $salario;

        public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularPago() {
        return $this->salario;
    }
}

class freeLanser extends empleado {
    private $horas;

        public function __construct($nombre, $salario, $horas) {
        parent::__construct($$horas);
        $this->horas = $horas;
    }

   public function calcularPago() {
        return $this->salario * $this->horas;
        }
}

$empleado = new freelanser("pedro", 1500, 50) ;
$empleado->calcularPago();
?>