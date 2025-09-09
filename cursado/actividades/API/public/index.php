<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
//Autenticacion toker
use Tuupola\Middleware\JwtAuthentication;
use Firebase\JWT\JWT;


//---------------------
//RUTAS
//---------------------
require __DIR__ . '/../vendor/autoload.php';
require 'conexion.php';
require 'roles.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();


//-------------------------------------------------------
// RUTA DE LOGIN PARA GENERAR TOKEN (PARA USER O ADMIN)
//-------------------------------------------------------

$app->post('/login', function (Request $request, Response $response) {
$header = $request->getHeaderLine('Authorization');

    //validar qu el ancabezado empiece con Basic, sino entra al if y tira error 
    if (strpos($header, 'Basic ') !== 0) {
        $response->getBody()->write(json_encode(["error" => "Falta encabezado Authorization"]));
        return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
    }

    // Decodificar credenciales  (quitar Basic) y comvertir a texto
    $solocredenciales = substr($header, 6);     //6: para empezar en la posicion 6 (Basic)
    $textocredenciales = base64_decode($solocredenciales);

    // Separar usuario y contraseña
    $partes = explode(':', $textocredenciales, 2);
    $username = $partes[0];
    $password = $partes[1];
    
    if ($username == 'e3' && $password == '123') {
        $role = 'admin';
    } elseif ($username == 'User1' && $password == '1234') {
        $role = 'user';
    } else {
        $response->getBody()->write(json_encode(["error" => "Credenciales inválidas"]));
        return $response->withStatus(401)->withHeader('Content-Type', 'application/json');
    }

    // Generar token JWT
    $key = "your_secret_key";      
    $payload = [
        "iss" => "example.com",
        "aud" => "example.com",
        "iat" => time(),
        "nbf" => time(),
        "exp" => time() + 3600,
        "data" => [
            "username" => $username,
            "role" => $role
        ]
    ];

    $token = JWT::encode($payload, $key, 'HS256');
    $response->getBody()->write(json_encode(["token" => $token]));
    return $response->withHeader('Content-Type', 'application/json');
});


// Middleware JWT
$app->add(new JwtAuthentication([
    "secret" => "your_secret_key",
    "attribute" => "token",
    "path" => ["/"],
    "ignore" => ["/programacionII/cursado/API/public/login"],
    "algorithm" => ["HS256"],
    "secure" => false
    
]));
// Ruta protegida
$app->get('/protected', function (Request $request, Response $response) {
    $token = $request->getAttribute('token');
    $username = $token['data']->username;
    $response->getBody()->write("Hola, $username");
    return $response;
});
$app->get('/persona', function (Request $request, Response $response)use ($pdo) {
    try {
        $stmt=$pdo->query("SELECT * FROM persona");
        $persona = $stmt->fetchAll();

        $response->getBody()->write(json_encode($persona));
        return $response->withHeader ('content-type', 'application/jason');        
    } catch (PDOException $e) {
        $error = ['error'=> e->getMenssage()];
    }
});
$app->post('/persona', function (Request $request, Response $response) use ($pdo) {
    $data = json_decode($request->getBody(), true);

    $sql = "INSERT INTO persona (nombre, edad) VALUES (:nombre, :edad)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nombre' => $data['nombre'],
            ':edad' => $data['edad']
        ]);

        $response->getBody()->write(json_encode(['message' => 'Persona creada']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    } catch (PDOException $e) {
        $error = ['error' => $e->getMessage()];
    }
});
$app->delete('/persona/{nombre}', function ($request, $response, $args) use ($pdo) {
    $nombre = $args['nombre'];
    $stmt = $pdo->prepare("DELETE FROM persona WHERE nombre = :nombre");
    $stmt->execute([':nombre' => $nombre]);
    $response->getBody()->write(json_encode(['message' => 'persona eliminado']));
    return $response->withHeader('Content-Type', 'application/json');
})->add(new RoleMiddleware(['admin'])); 


$app->addErrorMiddleware(true,true,true);
$app->setBasePath('/programacionII/cursado/API/public');
$app->run();
?>