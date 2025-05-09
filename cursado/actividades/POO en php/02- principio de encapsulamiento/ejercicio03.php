<?php
class Producto {
    private $precio;

    public function __construct($precio) {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($nuevoPrecio) {
        if ($nuevoPrecio > 0) {
            $this->precio = $nuevoPrecio;
    }
}

}
$producto = new Producto(3500);
echo "Precio inicial válido: " . $producto->getPrecio()  ; 
$producto->setPrecio(2500);
echo "Precio modificado válido: " . $producto->getPrecio()  ; 


$producto->setPrecio(-50);
echo "El precio ingresado no puede ser un valor negativo " . $producto->getPrecio() ; 
?>