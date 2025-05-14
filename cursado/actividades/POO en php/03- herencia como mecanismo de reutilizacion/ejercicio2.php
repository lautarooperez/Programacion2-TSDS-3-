<?php
class Animal {
    public $especie;

    public function __construct($especie) {
        $this->especie = $especie;
    }

    public function emitirSonido() {
        echo "El animal {$this->especie} esta emitiendo un sonido.";
    }
}

class Gato extends Animal{
    public function __construct($especie) {
        parent::__construct($especie);
        $this->Cilindrada = $Cilindrada;
    }

    public function emitirSonido() {
        echo "El animal {$this->Especie} dijo ¡MIAU!.";
    }
}

$animal = new animal(gato);
$animal->emitirSonido();  
?> 