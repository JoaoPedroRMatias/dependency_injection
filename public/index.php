<?php
require __DIR__ . "/../vendor/autoload.php";

use Slim\Factory\AppFactory;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$builder = new \DI\ContainerBuilder();
$builder->useAttributes(true);
$container = $builder->build();
$app = \DI\Bridge\Slim\Bridge::create(container: $container);

AppFactory::setContainer($container);

require __DIR__ . '/../config/routes/system.php';

$app->run();