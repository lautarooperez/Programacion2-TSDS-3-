<?php
class circulo {
    private $radio;

    public function __construct($radioInicial) {
            $this->$radio;
    }   
    public function getRadio() {
        return $this->radio;
    }
    public function Setradio () {
        if($radio>0){
            $this->radio = $radio; 
        }
    }
}
$circulo = new circulo(352);
$circulo->Setradio(350);
echo "el radio es de: " .$circulo->getRadio();
?>