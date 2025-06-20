<?php
namespace App;

require "config.php";

use DI\ContainerBuilder;
use Controller\User\UserController;

$builder = new ContainerBuilder();
$builder->useAttributes(true);
$container = $builder->build();

$controller = $container->get(UserController::class);
$resultGet = $controller->get();

$data = [
    "name" => "Pedro",
];
$resultPost = $controller->post($data);

print_r($resultGet);
