<?php
interface reproducible {
    public function reproducir();
}

class pelicula implements reproducible {
    public function reproducir() {
        echo "La pelicula reproduce video y sonido.";
    }
}

class podcast implements reproducible {
    public function reproducir() {
        echo "el potcaste solo reproduce sonido.";
    }
}

$reproductores = [new pelicula(), new potcast()];
foreach ($reproductores as $reproductor) {
    $reproductor->reproducir();
}
?>