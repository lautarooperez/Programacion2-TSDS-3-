<?php
class cuentaCorriete {
    private $saldo;
    private $limite;

    public function __construct($SaldoInicial, $limite) {
            $this->$saldo= $SaldoInicial;
            $this->limite = $limite;
    }   
    public function getsaldo() {
        return $this->saldo;
    }
    public function retirar($montoaR){
        if($montoaR <=$this->saldo + $this->limite){
            $this->saldo -= $montoaR;
        }
    }
}
$cuenta = new cuentaCorriente(50000, 40000);
$cuenta->retirar(6000);
echo "el saldo de la cuenta ahora es de: " .$cuenta->getsaldo();
?>