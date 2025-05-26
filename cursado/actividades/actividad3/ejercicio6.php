<?php
class database {
    private $host = 'localhost';
    private $db = 'actividad_3';
    private $user = 'root';
    private $pass = 'root';
    private $charset = 'utf8mb4';
    private $pdo;

    public function __construct (){
        $dsn = "mysql=$this->host;dbname=$this->db;charset=$this->chsrset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
            ];
    try {
        $this->pdo =new PDO($dsn,$this->user, $this->pass,$options);
    } catch (PDOExeption $e) {
           echo "Error en la conexion:  " .$e->getMessage();
        }
    }
 
    public function getUsersById($id){
        $stmt= $this->pdo->prepare(" SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute([':id'=> $id]);
        return $stmt->fetch();
    }
    public function createUser($email, $estado){
        $stmt = $this->pdo->prepare("INSERT INTO usuario (email, estado)VALUES(:email, :email)");
        return $stmt->execute([':email'=> $email, ':estado'=> $estado]);
    }
}
?>  