<?php
class libro {
    private $numerosPaginas;

    public function __construct($NumeroIPaginas) {
            $this->$numerosPaginas;
    }   
    public function getPaginas() {
        return $this->numerosPaginas;
    }
    public function SetNPaginas () {
        if($numerosPaginas>0){
            $this->numerosPaginas = $numerosPaginas; 
        }
        else{
            echo "el numero de paginas no pude ser menor a ceno ni  cero";
        }
    }
}
$libro = new libro(352);
$libro->SetNPaginas(350);
echo "la cantidad de paginas que posee este libro es de: " .$libro->getPaginas();
?>