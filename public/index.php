<?php
declare(strict_types=1);
namespace App\Example;

require __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Service\Example\Service;

$builder = new ContainerBuilder();
$builder->useAttributes(true);
$container = $builder->build();

$service = $container->get(Service::class);
$result = $service->getExempleLogger()->something();

print_r($result);
