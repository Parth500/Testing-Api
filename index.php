<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'prospects.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/test', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Hello Parth");

    return $response;
});

$app->get('/getProspects',function(){
	$prospect=new prospectsCla();
	$prospect->prospectsFun();
});

$app->run();