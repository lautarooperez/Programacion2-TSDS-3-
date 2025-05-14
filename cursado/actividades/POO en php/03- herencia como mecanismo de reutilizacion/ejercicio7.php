<?php
abstract class instrumento {
    abstract public function sonar ();
}

class piano extends instrumento {
    public function sonar(){
    echo "el piano hace pipipon.";
    }
}

$instru = new piano();
$instru->sonar();  
?>