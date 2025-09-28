<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('', function (RouteCollectorProxy $group) 
{
    $group->group('/api', function (RouteCollectorProxy $group)
    {
        $group->get('/status', [\Controller\Status\StatusController::class, 'get']);
    });
});