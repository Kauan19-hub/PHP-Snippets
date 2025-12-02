<?php
require 'vendor/autoload.php';

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = new App();

$app->get('/api/produtos', function (Request $request, Response $response) {
    $produtos = buscar_produtos();

    return $response->withJson($produtos);
});

$app->post('/api/produtos', function (Request $request, Respose $response) {
    $data = $request->getParseBody();
    $produto = criar($data);

    return $response->withJson($produto, 201);
});

$app->run();
?>