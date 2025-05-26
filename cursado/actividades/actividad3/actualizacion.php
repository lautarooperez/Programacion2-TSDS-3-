<?php
require 'conexion.php';
    $nuevoEstado = 'activado';
    $idUsuario = 1;

    try {
       $sql= "UPDATE usuarios SET estado = :estado where id = :id";
    $stmt = $pdo->prepare($sql); 
    

    $stmt->execute([
        ':estado' => $nuevoEstado,
        ':id'=> $idUsuario,
    ]);
    echo "El estado del usuario se cambio correctamnete";     
    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo"error al actualizar el estado del usuario" . $e->getMessage();
    }

