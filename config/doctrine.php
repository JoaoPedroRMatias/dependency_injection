<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

return [

    \Doctrine\ORM\EntityManager::class => Di\factory(function ($host, $db, $user, $pass, $port) {

        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . '/../App/Entity'],
            isDevMode: true,
        );

        $connection = DriverManager::getConnection([
            'driver' => 'pdo_mysql',
            'driverOptions' => [1002 => 'SET NAMES utf8'],
            'host' => $host,
            'port' => $port,
            'dbname' => $db,
            'user' => $user,
            'password' => $pass,
            'charset' => 'utf8mb4',
        ], $config);

        return new EntityManager($connection, $config);
    })
        ->parameter('host', DI\get('db.host'))
        ->parameter('db', DI\get('db.database'))
        ->parameter('user', DI\get('db.user'))
        ->parameter('pass', DI\get('db.pass'))
        ->parameter('port', DI\get('db.port'))

];