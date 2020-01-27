<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\HttpNotFoundException;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, array $args) {
    $usuarios = array("dario", "harold", "tom");
    $archivo = new \Blogs\FileStore("lista_de_usuarios.data");
    $archivo->save(["asd","asd","asd"]);
    $archivo->save($usuarios);
    $response->getBody()->write($archivo->read());
    return $response;
});

$app->run();
