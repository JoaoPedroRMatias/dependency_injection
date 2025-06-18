<?php
declare(strict_types=1);
namespace App;

require __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Service\Service;

$builder = new ContainerBuilder();
$builder->useAttributes(true);
$container = $builder->build();

$service = $container->get(Service::class);
$result = $service->getExempleLogger()->user();

print_r("Usuário: $result->Name\n");
