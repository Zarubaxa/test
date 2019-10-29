<?php
use Slim\Views\PhpRenderer;
require __DIR__ . '/../vendor/autoload.php';


$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/about/{name}', function ($request, $response, $args) {
    $renderer = new PhpRenderer('../templates');
    return $renderer->render($response, "about.phtml", $args);
});

$app->run();


