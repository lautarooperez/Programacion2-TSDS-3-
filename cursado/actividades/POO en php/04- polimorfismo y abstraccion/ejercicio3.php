<?php
interface printable {
    public function imprimir();
}

class documento implements printable {
    public function imprimir() {
        echo "el documento se imprime en palpel.";
    }
}

class foto implements printable {
    public function imprimir() {
        echo "la foto se imprime en papel foto.";
    }
}

$impresiones = [new documento(), new foto ()];
foreach ($impreciones as $impresion) {
    $impresion->imprimir();
}
?>