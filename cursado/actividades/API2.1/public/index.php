<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Tuupola\Middleware\HttpBasicAuthentication;

require __DIR__ . '/../vendor/autoload.php';
require 'conexion.php';
$app = AppFactory::create();

$app->add(new HttpBasicAuthentication([
    "path" => "/API2.1",
    "users" => [
        "user" => "password"
    ],
    "secure" => false
]));
$app->get('/protected', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Ruta protegida accesible");
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
$app->put('/persona/{nombre}', function ($request, $response, $args) use ($pdo) {
    $nombre = $args['nombre'];
    $data = json_decode($request->getBody(), true);

    $sql = "UPDATE persona SET edad = :edad WHERE nombre = :nombre";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':edad' => $data['edad'],
        ':nombre' => $nombre
    ]);

    $response->getBody()->write(json_encode(['message' => 'Persona actualizada']));
    return $response->withHeader('Content-Type', 'application/json');
});
$app->delete('/persona/{nombre}', function ($request, $response, $args) use ($pdo) {
    $nombre = $args['nombre'];

    $sql = "DELETE FROM persona WHERE nombre = :nombre";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nombre' => $nombre]);

    $response->getBody()->write(json_encode(['message' => 'Persona eliminada']));
    return $response->withHeader('Content-Type', 'application/json');
});
$app->addErrorMiddleware(true,true,true);
$app->setBasePath('/programacionII/cursado/API2.1/public');
$app->run();
?>