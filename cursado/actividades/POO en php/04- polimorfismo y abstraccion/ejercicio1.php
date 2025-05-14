<?php
interface nadador {
    public function nadar();
}

class pez implements nadador {
    public function nadar() {
        echo "el pez coletea y nada.";
    }
}

class persona implements nadador {
    public function nadar() {
        echo "La persona mueve los brazos y piernas y nada.";
    }
}

$nadaedores = [new pez(), new persona()];
foreach ($nadaedores as $nadador) {
    $nadador->nadador();
}
?>