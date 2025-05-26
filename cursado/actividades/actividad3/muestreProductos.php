<?php
require 'conexion.php';
$nombrebuscado = isset($_GET['nombre']) ? $_GET['nombre'] : '';
if ($nombrebuscado) {
try{
    $sql="SELECT * FROM productos WHERE nombre = :nombre ";
    $stmt = $pdo->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($productos){
        foreach ($productos as $producto){
            echo "ID:". $producto['id']."\n";
            echo "nombre". $producto ['nombre']. "\n";
            echo "precio". $producto ['precio']. "\n";
            echo "------------------o------------------- \n";
        }
    }else {
        echo "no exiten productops en esta base de datos";
    }
} 
catch (PDOException $e){
    echo "Error al obtener productos: " . $e->getMessage() . "\n";
}
}

    else {  
    echo "Ingresar producto para buscar.\n";}
?>