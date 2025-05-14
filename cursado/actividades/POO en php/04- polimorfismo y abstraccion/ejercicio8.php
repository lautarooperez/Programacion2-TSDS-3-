<?php
abstract class instrumento {
    abstract public function tocar();
}

class violin extends instrumento {
    public function tocar() {
        echo "El violin emite un sonido raro";
    }
}
class bateria extends instrumento {
    public function tocar() {
        echo "La bateria hace un ruido fuerte";
    }
}

$instrumentos = [new violin(), new bateria()];
foreach ($instrumentos as $instrumento) {
    $instrumento->tocar();
}
?>