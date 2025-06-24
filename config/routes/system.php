<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('', function (RouteCollectorProxy $group) 
{
    $group->group('/api', function (RouteCollectorProxy $group)
    {
        $group->get('', [\Controller\User\UserController::class, 'get']);
    });
});