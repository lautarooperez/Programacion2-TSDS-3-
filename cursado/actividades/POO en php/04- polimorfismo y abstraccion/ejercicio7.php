<?php
interface comunicable {
    public function enviarmensaje();
}

class correo implements comunicable {
    private $mensaje;

    public function __contruct($mensaje){
        $this->mensaje = $mensaje;
    }
    public function enviarmensaje() {
        echo "El correo dice: {$this->mensaje}.";
    }
}

class texto implements comunicable {
    private $mensaje;

    public function __contruct($mensaje){
        $this->mensaje = $mensaje;
    }
    public function enviarmensaje() {
        echo "El texto dice: {$this->mensaje}.";
    }
}

$comunicables = [new documentos("hola mundo"), new texto("roberto")];
foreach ($comunicables as $comunicable) {
    $comunicable->enviarmensaje();
}
?>