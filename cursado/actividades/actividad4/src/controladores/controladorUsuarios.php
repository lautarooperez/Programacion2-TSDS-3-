<?php
namespace controladores;
use modelos\usuario;

class controladorUsuarios{
    public function inicio(){
        return"pagina de usaurios";
    }
    public function mostrarNombre(): string{
        $usuario = new Usuario();
        return "el nombre del usuario es:" .$usuario->obtenerNombre();
    }
}


?>