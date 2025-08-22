<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
//use Tuupola\Middleware\HttpBasicAuthentication;
use Tuupola\Middleware\JwtAuthentication;
use Firebase\JWT\JWT;
 
/* require __DIR__ . '/../vendor/autoload.php';


$app = AppFactory::create();
$app->add(new HttpBasicAuthentication([
    "path" => "/",
    "users" => [
        "user" => "123456"
    ],
    "secure" => false
]));
$app->get('/protected', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Ruta protegida accesible");
    return $response;
});
$app->get('/persona', function (Request $request, Response $response) {
    $data = array('name' => 'lautaro', 'edad' => 20);
    $payload = json_encode($data);

    $response->getBody()->write($payload);
    return $response
          ->withHeader('Content-Type', 'application/json');
}); */

require __DIR__ . '/../vendor/autoload.php';
require 'conexion.php';
require 'autorizacion.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();
// Ruta de login para emitir token
$app->post('/login', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $username = $data['username'] ?? '';
    $password = $data['password'] ?? '';

    if ($username == 'e3' && $password == 'password') {
        $key = "your_secret_key";
        $payload = [
            "iss" => "example.com",
            "aud" => "example.com",
            "iat" => time(),
            "nbf" => time(),
            "exp" => time() + 3600,
            "data" => [
                "username" => $username
            ]
        ];
        $token = JWT::encode($payload, $key, 'HS256');
        $response->getBody()->write(json_encode(["token" => $token]));
    } else {
        $response->getBody()->write("Credenciales inválidas");
        return $response->withStatus(401);
    }
    return $response->withHeader('Content-Type', 'application/json');
});

// Middleware JWT
$app->add(new JwtAuthentication([
    "secret" => "your_secret_key",
    "attribute" => "token",
    "path" => "/",
    "ignore" => ["API/public/login"],
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

/*$app->post('/persona', function (Request $request, Response $response) {
 $body = $request->getBody()->getContents();
    $data = json_decode($body, true); 

    $nombre = $data['nombre'] ?? 'Sin nombre';
    $edad = $data['edad'] ?? 'Sin edad';

    // respuesta
    $respuesta = [
        'mensaje' => 'La persona es:',
        'nombre' => $nombre,
        'edad' => $edad
    ];

    $response->getBody()->write(json_encode($respuesta));
    return $response->withHeader('Content-Type', 'application/json');
});*/

$app->addErrorMiddleware(true,true,true);
$app->setBasePath('/programacionII/cursado/API/public');
$app->run();
?>