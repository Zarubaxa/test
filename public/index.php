<?php
use Slim\Views\PhpRenderer;
use Slim\Factory\AppFactory;
require __DIR__ . '/../vendor/autoload.php';


$app = AppFactory::create();
$app->get('/about', function ($request, $response, $args) {
    $renderer = new PhpRenderer('../templates');
    return $renderer->render($response, "about.phtml", $args);
});

$app->run();


