<?php
namespace vistas;

use contratos\renderable;

class vista implements renderable{
    public function renderizar(){
        return "te renderizo desde vistas";
    }
}

?>