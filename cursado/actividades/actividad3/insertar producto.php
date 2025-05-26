<?php
require 'conexion.php';
try{
     $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
     $stmt = $pdo->prepare($sql);
     $productos= [
          ['nombre'=>'chocolate milka', 'precio'=>5005],
          ['nombre'=>'chocolate cofler', 'precio'=>2500],
          ['nombre'=>'chocolate bonobon', 'precio'=>3000],
          ['nombre'=>'chocolate aguila', 'precio'=>4500],
  ];

  foreach($productos as $producto){
    $stmt->execute([
      ':nombre' => $producto['nombre'],
      ':precio'  => $producto['precio']
  ]);
  }
  echo "los productos se insertaron con exito en la tabla.";
} catch (PDOException $e) {
    echo"error al insertar los productos en la tabla" . $e->getMessage();
}
 ?>