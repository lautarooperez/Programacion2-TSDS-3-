<?php
namespace modelos;
use base\persona;

class empleado extends persona{
    public function trabajar(){
        return "el empleado trabaja y te saluda";
    }
}
?>