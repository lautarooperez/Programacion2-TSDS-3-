<?php
class Cuenta{
	public $saldo=0;

	public function ingresar($monto){
		$this->saldo += $monto;
			}
	public function retirar($monto){
		$this->saldo -=$monto;
}}

$cuenta = new Cuenta();
$cuenta->ingresar(300);
$cuenta->retirar(400);
echo "Saldo final: $".$cuenta->saldo;
?>