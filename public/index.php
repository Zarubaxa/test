<?php
use Slim\Views\PhpRenderer;
require __DIR__ . '/../vendor/autoload.php';


$app = Slim\AppFactor::creates();

$app->get('/about/{name}', function ($request, $response) {
    $renderer = new PhpRenderer('../templates');
    return $renderer->render($response, "about.phtml");
});

$app->run();


