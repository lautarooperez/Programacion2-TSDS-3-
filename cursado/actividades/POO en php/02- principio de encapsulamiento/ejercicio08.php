<?php
class empleado{
    private $sueldo;

    public function __construct($sueldoinicial) {
            $this->$sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }
    public function aumentarSueldo($porcentaje){
        if($porcentaje>0){
            $this->sueldo += $this->sueldo * ($porcentaje/100);
        }
    }
}

$emp = new empleado(5000);
$emp->aunmentarsueldo (25);
echo"el sueldo del empleado ahora es de:" .$emp->getSueldo();
?>