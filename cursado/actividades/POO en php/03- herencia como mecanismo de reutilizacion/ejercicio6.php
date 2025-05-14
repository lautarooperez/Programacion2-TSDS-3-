<?php
class Cuenta {
    public $saldo;

    public function __construct($saldo) {
        $this->saldo= $saldo;
    }

    public function depositar($monto) {
        $this->saldo += $this->monto;
        echo "Deposito ${$this->monto} y ahora su cuenta tiene un saldo de ${$this->saldo} .";
    }
    
    public function retirar($monto) {
        $this->saldo -= $this->monto;
        echo "retiro ${$this->monto} y ahora su cuenta tiene un saldo de ${$this->saldo} .";
    }
}

class cuentaPremium extends Cuenta {
    public $bonificacion;

    public function __construct($saldo, $bonificacion) {
        parent::__construct($bonificacion);
        $this->bonificaion = $bonificacion;
    }

    public function aplicarBonificaion() {
        $this->saldo += $this->bonificaicion;
        echo "se le sumo una bonificacion de ${$this->bonificacion} y ahora su cuenta tiene un saldo de ${$this->saldo} .";
    }
}

$cuenta = new cuentaPremium(50000,15000 );
$cuenta->aplicarBonificaion();  
?>