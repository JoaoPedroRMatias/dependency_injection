<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;
use function DI\autowire;

return [
    EntityManagerInterface::class => function (ContainerInterface $c) {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . '/../App/Entity'],
            true
        );

        $connectionParams = [
            'dbname'   => $_ENV['DBNAME'],
            'user'     => $_ENV['USERNAME'],
            'password' => $_ENV['PASSWORD'],
            'host'     => $_ENV['HOST'],
            'driver'   => 'pdo_mysql',
            'port'     => $_ENV['PORT'] ?? 3306,
        ];

        $connection = DriverManager::getConnection($connectionParams, $config);

        return new EntityManager($connection, $config);
    },

    Repository\Repository::class => autowire()->constructorParameter(
        'em',
        \DI\get(EntityManagerInterface::class)
    ),
];
