<?php
$host = 'localhost';  
$db   = 'actividad_3';  
$port = 3306;  
$charset = 'utf8mb4';  
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$usuario= "root";
$password="root";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,          
    PDO::ATTR_EMULATE_PREPARES   => false,                     
];

try {
    $pdo = new PDO($dsn, $usuario, $password, $options);
} catch (PDOException $e) {
    // Manejar error de conexión (log y mensaje genérico al usuario)
    error_log($e->getMessage());
    echo'Error al conectarse a la base de datos.';
}

?>