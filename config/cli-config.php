<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

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
    'driverOptions' => [1002 => 'SET NAMES utf8'],
];

$connection = DriverManager::getConnection($connectionParams, $config);
$entityManager = new EntityManager($connection, $config);

ConsoleRunner::run(new SingleManagerProvider($entityManager));
