<?php

use Psr\Http\Message\ServerRequestInterface;

require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

session_start();
date_default_timezone_set('America/Sao_Paulo');

try {

    $builder = new \DI\ContainerBuilder();
    $builder->useAttributes(true);
    $builder->addDefinitions(__DIR__ . '/../config/doctrine.php');
    $builder->addDefinitions(__DIR__ . '/../config/settings.php');
    $builder->addDefinitions(__DIR__ . '/../config/repositories.php');

    $container = $builder->build();
    $app = \DI\Bridge\Slim\Bridge::create($container);

    $app->addBodyParsingMiddleware();

    $errorMiddleware = $app->addErrorMiddleware(true, false, false);
    $errorMiddleware->setDefaultErrorHandler(function (
        ServerRequestInterface $request,
        Throwable $exception,
        bool $displayErrorDetails,
        bool $logErrors,
        bool $logErrorDetails
    ) use ($app) {
        $response = $app->getResponseFactory()->createResponse();

        $response->getBody()->write(json_encode([
            'code' => $exception->getCode(),
            'error' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine()
        ]));

        if (in_array($exception->getCode(), [404, 413, 500])) {
            return $response->withHeader('Content-Type', 'application/json')->withStatus($exception->getCode());
        }

        return $response->withHeader('Content-Type', 'application/json');
    });

    require __DIR__ . '/../config/routes/system.php';

    $app->add(new Tuupola\Middleware\CorsMiddleware([
        "origin" => ["*"],
        "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE"],
        "headers.allow" => ["Authorization", "Content-Type"],
        "headers.expose" => [],
    ]));

    $app->run();

} catch (Exception $e) {
    echo $e->getMessage();
}