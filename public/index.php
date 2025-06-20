<?php
declare(strict_types=1);
namespace App;

require __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;
use Controller\User\UserController;

$builder = new ContainerBuilder();
$builder->useAttributes(true);
$container = $builder->build();

$controller = $container->get(UserController::class);
$result = $controller->get();

print_r($result);
