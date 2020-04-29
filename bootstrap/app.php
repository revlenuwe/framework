<?php

use App\Config\Config;
use App\Config\Loaders\ArrayLoader;
use App\Exceptions\ExceptionHandler;
use App\Security\Auth\Auth;
use App\Session\SessionStorage;
use App\Views\View;
use FastRoute\Route;
use FastRoute\RouteCollector;
use Klein\Klein;
use Laminas\Diactoros\Response;
use League\Route\RouteGroup;
use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

session_start();

require_once __DIR__ . "/../vendor/autoload.php";

try {
    $dotenv = Dotenv\Dotenv::createImmutable(base_path())->load();
}catch(\Dotenv\Exception\InvalidPathException $e){
    die('App Error');
}

require_once base_path('bootstrap/container.php');

$session = $container->get(SessionStorage::class);

$router = $container->get(Router::class);

require_once base_path('bootstrap/middleware.php');

require_once base_path('routes/web.php');


try {
    $response = $router->dispatch($container->get('request'));
}catch (Exception $e){
    $handler = new ExceptionHandler(
        $e,
        $container->get(SessionStorage::class),
        $container->get(View::class),
        $container->get(Response::class),
    );

    $response = $handler->handle();
}



return $response;