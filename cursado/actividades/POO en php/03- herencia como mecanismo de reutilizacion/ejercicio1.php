<?php
class Vehiculo {
    public $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function avanzar() {
        echo "El vehículo {$this->marca} se está moviendo.";
    }
}

class Moto extends Vehiculo {
    public $Cilindrada;

    public function __construct($marca, $Cilindrada) {
        parent::__construct($marca);
        $this->Cilindrada = $Cilindrada;
    }

    public function avanzar() {
        echo "La moto {$this->marca} con {$this->cilindradas} cilindradas se mueve rápido.";
    }
}

$moto = new moto("yamaha", 600);
$moto->avanzar();  
?>