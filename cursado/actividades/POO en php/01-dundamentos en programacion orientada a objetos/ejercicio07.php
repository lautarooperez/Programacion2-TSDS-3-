<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    public function valorInventario() {
        return $this->precio * $this->stock;
    }
}

$producto = new Producto();
$producto->nombre = "cocacola";
$producto->precio = 3500;
$producto->stock = 20;

echo"Producto: ". $producto->nombre . " Inventario: $" . $producto->valorInventario();
?>