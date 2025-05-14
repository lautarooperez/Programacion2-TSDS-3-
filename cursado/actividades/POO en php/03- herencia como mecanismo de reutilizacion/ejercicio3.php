<?php
class persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        echo "hola soy {$this->nombre} y tengo {$this->edad} años.";
    }
}

class profesor extends persona {
    public $materia;

    public function __construct($nombre, $edad, $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function saludar() {
        echo "hola bienvenidos a {$this->materia}, mi nombre es {$this->nombre} y tengo {$this->edad} años";
    }
}

$profesor = new profesor ("juan", 25, "matematicas 2");
$moto->saludar();  
?>