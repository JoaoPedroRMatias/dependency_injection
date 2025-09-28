<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$container->set(EntityManager::class, function() {
    $config = ORMSetup::createAttributeMetadataConfiguration(
        paths: [__DIR__ . '/../App/Entity'],
        isDevMode: true
    );

    $connectionParams = [
        'dbname' => $_ENV['DBNAME'],
        'user' => $_ENV['USERNAME'],
        'password' => $_ENV['PASSWORD'],
        'host' => $_ENV['HOST'],
        'port' => $_ENV['PORT'] ?? 3306,
        'driver' => 'pdo_mysql',
    ];

    $connection = DriverManager::getConnection($connectionParams, $config);

    return new EntityManager($connection, $config);
});
