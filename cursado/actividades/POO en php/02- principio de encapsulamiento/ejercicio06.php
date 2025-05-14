<?php
class rectangulo {
    private $largo;
    private $ancho;

    public function __construct($dimencionesIniciales) {
        $this->SetDimenciones ($ancho, $largo);
    }

    public function SetDimenciones ($largo,$ancho) {
        if($largo> 0 && $ancho>0){
            $this->Largo = $largo;
            $this->ancho = $ancho; 
        }
    }

    public function getLargo() {
        return $this->largo;
    }
    
    public function getAncho() {
        return $this->ancho;
    }
}

$rectangulo= new $rectangulo(6, 5);
$rectangulo->SetDimenciones(5,3);
echo"el largo es de:".$rectangulo->getLargo(). " y el ancho es de" .$rectangulo->getAncho();
?>