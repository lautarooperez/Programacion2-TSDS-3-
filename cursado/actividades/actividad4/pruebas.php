<?php
require 'autoload.php';
require 'src/funcionesAyuda/funciones.php';

use modelos\usuario;
use base\persona;
use modelos\empleado;
use controladores\controladorUsuarios;
use proveedor\herramienta\ayudante as ayudaProveedor;
use vistas\vista;
use utilidades\matematicas;
use configuracion\configuracionApp;
use contratos\renderable;
use function funciones\saludar;

$usuario= new usuario();
echo $usuario->decirHola() . "\n";

$persona= new persona();
echo $persona->saludar() . "\n";

$empleado = new empleado();
echo $empleado->saludar() . " - " . $empleado->trabajar() . "\n";

echo AyudaProveedor::ayudar() . "\n";

$vista = new vista();
echo $vista->renderizar() . "\n";

$controlador = new controladorUsuarios();
echo $controlador->inicio() . "\n";

echo matematicas::sumar(1600, 500) . "\n";

echo configuracionApp::NOMBRE_APP . "\n";

$controlador = new ControladorUsuarios();
echo $controlador->mostrarNombre() . "\n";
?> 