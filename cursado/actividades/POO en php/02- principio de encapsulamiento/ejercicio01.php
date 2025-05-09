<?php
class CuentaBancaria {
    private $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function ingresar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Ingresaste $monto. Nuevo saldo: {$this->saldo}.";
        } else {
            echo "El monto debe ser positivo.";
        }
    }
public function retirar($monto) {
        if ($monto > 0) {
            $this->saldo -= $monto;
            echo "Retiraste $monto. Nuevo saldo: {$this->saldo}.";
        } else {
            echo "El monto debe ser positivo.";
        }
    }

}

$cuenta = new CuentaBancaria(1000);
echo $cuenta->getSaldo();  
$cuenta->ingresar(700);  
$cuenta->retirar(326);  
?>