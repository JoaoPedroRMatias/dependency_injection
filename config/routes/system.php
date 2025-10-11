<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('', function (RouteCollectorProxy $group) 
{
    $group->group('/api', function (RouteCollectorProxy $group)
    {
        $group->get('/status', [\Controller\Movies\MoviesController::class, 'status']);
        $group->get('/movie/law-vs-blackbeard', [\Controller\Movies\MoviesController::class, 'get']);
    });
});