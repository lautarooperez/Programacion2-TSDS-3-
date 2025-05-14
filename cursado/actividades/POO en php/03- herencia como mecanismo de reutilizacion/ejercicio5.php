<?php
class producto {
    public $nombre;
    public $precio;

    public function __construct($precio, $nombre) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function detalle() {
        echo "{$this->nombre} a un precio de ${$this->precio} ";
    }
}

class productoOferta extends producto {
    public $descuento;

        public function __construct($precio, $nombre) {
        parent::__construct($$descuento);
        $this->descuento = $descuento;
    }

    public function detalle () {
        $precioDesc = $this->precio -= $this->precio* ($this->descuento / 100);
        echo "{$this->nombre} tiene un descuento del {$this->descuento}% o sea ${$this->precioDesc}";
    }
}

$profuctoOferta = new productoOferta(1000,"cocacola", 25);
$productoOferta->detalle();  
?>