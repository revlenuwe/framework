<?php


use League\Route\RouteGroup;

$router->get('/index','App\Controllers\AppController::index')->setName('index');
$router->group('/auth',function (RouteGroup $router){
    $router->get('/login','App\Controllers\Auth\LoginController::index')->setName('auth-login');
    $router->post('/login','App\Controllers\Auth\LoginController::authenticate')->setName('authenticate');


    $router->get('/register','App\Controllers\Auth\RegisterController::index')->setName('register-index');
    $router->post('/registerr','App\Controllers\Auth\RegisterController::register')->setName('register');
});

