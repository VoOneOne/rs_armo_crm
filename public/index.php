<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Vooneone\RsArmoCrm\Controllers\FormController;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/app', function () {
    $formController = new FormController();
    return $formController->index();
});

$app->post('/app', function (Request $request) {
    $formController = new FormController();
    return $formController->insert($request);
});

$app->run();
